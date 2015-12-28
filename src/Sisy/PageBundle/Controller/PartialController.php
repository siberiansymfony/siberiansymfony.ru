<?php

namespace Sisy\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PartialController extends Controller
{
    /**
     * Шапка сайта
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function headerAction(Request $request)
    {
        $menu = $this->container->getParameter('mainMenu');

        return $this->render('PageBundle:Partial:header.html.twig', [
            'menu' => $menu,
        ]);
    }
}
