<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DefaultController
 * @package AppBundle\Controller
 */
class AppController extends Controller
{
  const DEFAULT_LIMIT = 6;
    /**
     * @Route(
     *     name="app_homepage"
     * )
     *
     * @return Response
     */
    public function indexAction(): Response
    {
        return $this->render('@App/App/index.html.twig', [
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
    public function page2Action(): Response
    {
        return $this->render('@App/App/page2.html.twig', []);
    }
}
