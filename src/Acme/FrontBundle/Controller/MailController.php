<?php
// src/Acme/FrontBundle/Controller/MailController.php

namespace Acme\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MailController extends Controller
{
 
    
/**
 * @Route("/mail/send/{name}.{_format}", defaults={"_format"="html"}, requirements={"_format"="html|xml|json"}, name="_demo_hello")
 * @Template()
 */
    public function sendAction($jmeno, $email, $text){
        
            $message = \Swift_Message::newInstance()
                ->setSubject('Hello Email')
                ->setFrom($email)
                ->setTo('kozusnikjan@gmail.com')
                ->setBody(
            $this->renderView(
                'FrontBundle:Hello:email.html.php',
                array('jmeno' => $jmeno, 'text' => $text)
            )
        );
    $this->get('mailer')->send($message);

    return $this->render('acme_front_homepage');
        
    }
    
}