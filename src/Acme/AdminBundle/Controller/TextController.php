<?php

namespace Acme\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\EntityBundle\Entity\Text;
use Acme\AdminBundle\Form\Type\TextType;
use Acme\EntityBundle\Entity\Translation\TextTranslation;
use Symfony\Component\HttpFoundation\Request;

class TextController extends Controller
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
        
        return $this->render('AcmeAdminBundle:Text:showAll.html.php', array('texts' => $texts));
    }
    
    
    public function addTextAction(Request $request)
    {
                
    $text = new Text();
    $text->setTitle('');
    $text->setContent('');

    $form = $this->createForm(new TextType(), $text);
    
    $form->handleRequest($request);
    
    if ($form->isValid()) {
    
    /* nastaveni autora */
    $text->setAuthor($this->getUser()->getId());    

    
    // assumes default locale is "en"
    $text2 = new Text();
    $text2->setTitle('Food');
    $text2->addTranslation(new TextTranslation('lt', 'title', 'Maistas'));
    
    
    $em = $this->getDoctrine()->getManager();
    $em->persist($text2);
    $em->flush();

    
        return $this->redirect($this->generateUrl('acme_admin_text'));
        
    }
   return $this->render('AcmeAdminBundle:Text:add.html.php', array(
            'form' => $form->createView(),
        ));
    
    

    

    }
    
}
