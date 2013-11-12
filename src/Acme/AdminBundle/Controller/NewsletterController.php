<?php
// src/Acme/AdminBundle/Controller/TaskController.php
namespace Acme\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\EntityBundle\Entity\NewsletterUser;


class NewsletterController extends Controller {
    
    public function showAllUsersAction(){
        
        $newsletterUsers = $this->getDoctrine()
        ->getRepository('AcmeEntityBundle:NewsletterUser')
        ->findAll();

        if (!$newsletterUsers) {
            throw $this->createNotFoundException(
                'Nebyli nalezeni žádní registrovaní'
            );
        }
        
        return $this->render('AcmeAdminBundle:Newsletter:showAllUsers.html.php', array('newsletterUsers' => $newsletterUsers));
        
    }
    
    public function showAllTextsAction(){
        
        $repository = $this->getDoctrine()
        ->getRepository('AcmeEntityBundle:NewsletterText');

        $query = $repository->createQueryBuilder('m')
        ->orderBy('m.date', 'DESC')
        ->getQuery();

        $newsletterTexts = $query->getResult();
        
        if (!$newsletterTexts) {
            throw $this->createNotFoundException(
                'Nebyly nalezeny žádné texty'
            );
        }
        
        return $this->render('AcmeAdminBundle:Newsletter:showAllTexts.html.php', array('newsletterTexts' => $newsletterTexts));

    }
    
    public function addTextAction(){
        
    }
    
    
}

