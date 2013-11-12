<?php

namespace Acme\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TextsController extends Controller
{
    public function showAllAction()
    {   
        
        $texts = $this->getDoctrine()
        ->getRepository('AcmeEntityBundle:Text')
        ->findAll();

        if (!$texts) {
            throw $this->createNotFoundException(
                'Nebyly nalezeny žádné články'
            );
        }
        
        return $this->render('AcmeFrontBundle:Texts:showAll.html.php', array('texts' => $texts));
    }
}
