<?php

namespace CoreBundle\Controller;

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Debug\Exception\FlattenException;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\Debug\Exception\FatalErrorException;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\DBAL\Exception\DriverException;

use FOS\RestBundle\Exception\InvalidParameterException;

use CoreBundle\Exception\ApiException ;
use CoreBundle\Controller\BaseController;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class ExceptionController extends BaseController implements ContainerAwareInterface
{


    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * Sets the Container.
     *
     * @param ContainerInterface|null $container A ContainerInterface instance or null
     *
     * @api
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }


    protected function getApiErrorMessage($key, $params = [])
    {
        $lang = $this->container->get('request_stack')->getCurrentRequest()->getLocale();

        $errorCodes = $this->container->getParameter("error-codes-{$lang}");

        $message = array_key_exists($key, $errorCodes) ? $errorCodes[$key]['msg'] : $key;

        if (! empty($params)) {
            $message = sprintf($message, $params);
        }
        return new JsonResponse([
            '_code' => array_key_exists($key, $errorCodes) ? $errorCodes[$key]['code'] : $key,
            '_msg' =>  $message
        ]);
    }


    /**
     * @param FlattenException $exception
     * @return JsonResponse
     */
    public function showExceptionAction($exception)
    {
        if ($exception instanceof InvalidParameterException) {
            return $this->getApiErrorMessage('PARAMETER_NOT_PROVIDED', $exception->getParameter()->getName());
        } elseif ($exception instanceof ApiException) {
            return $this->getApiErrorMessage($exception->key);
        } elseif ($exception instanceof UniqueConstraintViolationException) {
            return new JsonResponse([
                '_code' => '600',
                '_msg' =>  $exception->getMessage()
            ]);
        } elseif ($exception instanceof AccessDeniedHttpException) {
            return new JsonResponse([
                '_code' => $exception->getStatusCode(),
                '_msg' => $exception->getMessage()
            ]);
        } elseif ($exception instanceof DriverException) {
            return new JsonResponse([
                '_code' => '700',
                '_msg' =>  $exception->getMessage()
            ]);
        } else {
            return new JsonResponse([
                '_code' => '500',
                '_msg' =>  $exception->getMessage()
            ]);
        }
    }
}
