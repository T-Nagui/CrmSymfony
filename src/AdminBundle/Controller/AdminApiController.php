<?php

namespace AdminBundle\Controller;

use CoreBundle\Controller\BaseController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Nelmio\ApiDocBundle\Annotation\Model;
/**
 * Class AdminApiController
 * @package AdminBundle\Controller
 * @Rest\RouteResource("Admin",pluralize=false)
 */
class AdminApiController  extends BaseController
{
    /**
     * List all admin

     */
        public function getListeAction(){

            return [
                '_code'=>0,
                'admins'=>[
                    'nagui'
                ]
            ];
        }
}
