<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;

/**
 * Class ApiController
 * @package AppBundle\Controller
 */
class ApiController extends FOSRestController
{
    /**
     * @Rest\View()
     * @Rest\Get("hello/{astronaut}", defaults={"astronaut" = null})
     *
     * @param string $astronaut
     *
     * @return string
     */
    public function getHelloAction(string $astronaut = null)
    {
        return isset($astronaut) ? "Hello $astronaut" : "Hello Astronaut";
    }
}
