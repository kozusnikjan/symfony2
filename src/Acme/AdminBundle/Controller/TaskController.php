<?php
// src/Acme/AdminBundle/Controller/TaskController.php
namespace Acme\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\EntityBundle\Entity\Task;
use Acme\AdminBundle\Form\Type\TaskType;
use Symfony\Component\HttpFoundation\Request;

class TaskController extends Controller
{

    public function showAllAction(){
        $tasks = $this->getDoctrine()
        ->getRepository('AcmeEntityBundle:Task')
        ->findAll();

        if (!$tasks) {
            throw $this->createNotFoundException(
                'Nebyly nalezeny žádné úkoly'
            );
        }
        
        return $this->render('AcmeAdminBundle:Task:showAll.html.php', array("tasks" => $tasks));
    }
    
    public function addTaskAction(Request $request){

        $task = new Task();
        $task->setName('');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createForm(new TaskType(), $task);


        $form->handleRequest($request);
        
        if ($form->isValid()) {
          
            /* nastaveni autora */
            $task->setAuthor($this->getUser()->getId()); 
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

        return $this->redirect($this->generateUrl('acme_admin_task'));
        
        }
        
        return $this->render('AcmeAdminBundle:Task:add.html.php', array(
            'form' => $form->createView(),
        ));
    }
    
}
