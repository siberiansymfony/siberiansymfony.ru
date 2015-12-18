<?php

namespace Sisy\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="Homepage")
     */
    public function indexAction()
    {
        return $this->render('PageBundle:Default:index.html.twig');
    }
}
