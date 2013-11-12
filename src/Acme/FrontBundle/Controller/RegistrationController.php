<?php
// src/Acme/FrontBundle/Controller/RegistrationController.php
namespace Acme\FrontBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


use Acme\AccountBundle\Form\Type\RegistrationType;
use Acme\AccountBundle\Form\Model\Registration;


class RegistrationController extends Controller{
    
    public function registrationAction(){
        
        $registration = new Registration();
              
        $registrationForm = $this->createForm(new RegistrationType(), $registration, array(
            'action' => $this->generateUrl('account_create'),
        ));
        
        return $this->render(
            'AcmeFrontBundle:Registration:register.html.php',
            array('registrationForm' => $registrationForm->createView())
        );

    }
    
    
}