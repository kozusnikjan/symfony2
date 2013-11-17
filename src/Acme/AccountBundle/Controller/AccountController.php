<?php
// src/Acme/AccountBundle/Controller/AccountController.php
namespace Acme\AccountBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Acme\AccountBundle\Form\Type\RegistrationType;
use Acme\AccountBundle\Form\Model\Registration;
use Acme\AccountBundle\Entity\User;
use Acme\AccountBundle\Entity\UserRole;
use Acme\AccountBundle\Entity\Role;

class AccountController extends Controller
{
   
    
    public function createAction(Request $request)
    {  

    $em = $this->getDoctrine()->getManager();
    
    $registrationForm = $this->createForm(new RegistrationType(), new Registration());

    $registrationForm->handleRequest($request);
    

    if ($registrationForm->isValid()) {
        
        $registration = $registrationForm->getData();

        $user = $registration->getUser();
        
        $user->setSalt($this->generateSalt());
        $user->setIsActive(1);
       
        $factory = $this->get('security.encoder_factory');

        $encoder = $factory->getEncoder($user);
        $password = $encoder->encodePassword($user->getPassword(), $user->getSalt());
            
        $user->setPassword($password);
   
        $role = $this->getDoctrine()
        ->getRepository('AcmeAccountBundle:Role')
        ->find(3);	
	$user->addRole($role);

        $em->persist($user);  
        $em->flush();
        
        return $this->redirect($this->generateUrl('acme_front_homepage'));
    }
    

    return $this->render(
        'AcmeFrontBundle:Registration:register.html.php',
        array('registrationForm' => $registrationForm->createView())
    );
}


    /*
     * vygeneruje sul na hashovani hesla
     */
     public function generateSalt($len = 6){     
    $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';                       
    $salt = '';                      
    for ($i=0; $i < $len; $i++) {
        $salt .= substr($pool, mt_rand(0, strlen($pool) -1), 1);
    } 
         return $salt;
     }
}
