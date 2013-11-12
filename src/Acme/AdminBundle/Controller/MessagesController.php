<?php
// src/Acme/AdminBundle/Controller/TaskController.php
namespace Acme\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\EntityBundle\Entity\MessagesWeb;


class MessagesController extends Controller {
    
    public function showAllWebAction(){
        
//        $messagesWeb = $this->getDoctrine()
//        ->getRepository('AcmeEntityBundle:MessagesWeb')
//        ->findAll();
        
        $repository = $this->getDoctrine()
        ->getRepository('AcmeEntityBundle:MessagesWeb');

        $query = $repository->createQueryBuilder('m')
        ->orderBy('m.date', 'DESC')
        ->getQuery();

        $messagesWeb = $query->getResult();

        

        if (!$messagesWeb) {
            throw $this->createNotFoundException(
                'Nebyly nalezeny žádné zprávy'
            );
        }
        
        return $this->render('AcmeAdminBundle:Messages:showAll.html.php', array('messagesWeb' => $messagesWeb));
        
    }
    
}

