<?php

namespace CoreBundle\Exception;

use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpFoundation\Response;

class ApiException extends HttpException
{
    public $key;

    public function __construct($key)
    {
        parent::__construct(Response::HTTP_OK);
        $this->key = $key ;
    }
}
