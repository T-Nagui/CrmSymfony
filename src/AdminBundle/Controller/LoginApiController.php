<?php

namespace AdminBundle\Controller;

use CoreBundle\Controller\BaseController;
use CoreBundle\Entity as Entity;
use CoreBundle\Exception\ApiException;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Controller\Annotations as Rest;
use Nelmio\ApiDocBundle\Annotation\Model;
use Swagger\Annotations as SWG;
/**
 * Class LoginApiController
 * @package AdminBundle\Controller
 */
class LoginApiController extends BaseController
{
    /**
     *
     * @QueryParam(name="username", description="user name or email", requirements="\w+", nullable=false, allowBlank=false, strict=true)
     * @QueryParam(name="password", description="mot de passe de l'utilsateur", requirements="\w+", allowBlank=false, strict=true)
     * @param ParamFetcher $paramFetcher
     * @Rest\View(serializerGroups={"loginSystem"})
     * @return array
     * @throws ApiException
     */
    public function getLoginAction(ParamFetcher $paramFetcher){
        return [
            '_code' => 0
        ];
    }
}
