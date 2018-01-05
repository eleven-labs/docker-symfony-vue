<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DefaultController
 * @package AppBundle\Controller
 */
class AppController extends Controller
{
    /**
     * @Route(
     *     "/page1",
     *     name="app_homepage"
     * )
     *
     * @return Response
     */
    public function page1(): Response
    {
        return $this->render('App/page1.html.twig', [
          'message'=>'hello !'
        ]);
    }

    /**
     * @Route(
     *     "/page2",
     *     name="page2"
     * )
     *
     * @return Response
     */
    public function page2(): Response
    {
        return $this->render('App/page2.html.twig', []);
    }
}
