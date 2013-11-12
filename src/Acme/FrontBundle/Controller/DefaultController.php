<?php

namespace Acme\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\EntityBundle\Entity\MessagesWeb;
use Acme\EntityBundle\Form\Type\MessagesWebType;
use Acme\EntityBundle\Entity\NewsletterUser;
use Acme\EntityBundle\Form\Type\NewsletterType;
use Symfony\Component\HttpFoundation\Request;




class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
    
      // get request
      $request = $this->getRequest();

      
      // build form
      $newsletter = new NewsletterUser();
      $newsletterForm = $this->createForm(new NewsletterType(), $newsletter);
      $newsletterForm->handleRequest($request);
 
       if ($newsletterForm->isValid()) {
            
            $newsletter->setDate(new \DateTime('now'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($newsletter);
            $em->flush();
            
            $this->get('session')->getFlashBag()->add(
            'noticeNewsletter',
            $this->get('translator')->trans('ebook.register.sucessfull')
            );
            
        return $this->redirect($this->generateUrl('acme_front_homepage'));
    }
        
      // build form
      $messagesWeb = new MessagesWeb();
      $messagesWebForm = $this->createForm(new MessagesWebType(), $messagesWeb);
      $messagesWebForm->handleRequest($request);
 
       if ($messagesWebForm->isValid()) {
            
            $messagesWeb->setDate(new \DateTime('now'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($messagesWeb);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
            'noticeMessagesWeb',
            $this->get('translator')->trans('message.send.sucessfull')
            );
            
          $messageBody = $this->renderView('AcmeFrontBundle:Email:email.html.php', array('sender' => $messagesWeb->getSender(), 'text' => $messagesWeb->getContent())); 
          $message = \Swift_Message::newInstance()
                ->setSubject('Zpráva z webu - '.$messagesWeb->getSender())
                ->setFrom('info@poridsiweb.cz')
                ->setTo('kozusnikjan@gmail.com')
                ->setBody($messageBody, 'text/html');
                $this->get('mailer')->send($message);
  
            
        return $this->redirect($this->generateUrl('acme_front_homepage'));
        
    }
        
        return $this->render('AcmeFrontBundle:Default:index.html.php', 
                array('messagesWebForm' => $messagesWebForm->createView(),
                      'newsletterForm' => $newsletterForm->createView()));
    }
}
