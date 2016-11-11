<?php

namespace Odaku\OdakuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OdakuOdakuBundle:Default:index.html.twig');
    }
}
