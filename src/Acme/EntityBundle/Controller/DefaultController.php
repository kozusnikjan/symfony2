<?php

namespace Acme\EntityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeEntityBundle:Default:index.html.twig', array('name' => $name));
    }
}
