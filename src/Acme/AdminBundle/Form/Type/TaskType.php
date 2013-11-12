<?php
// src/Acme/AdminBundle/Form/Type/TaskType.php
namespace Acme\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text')
            ->add('dueDate', 'date')
            ->add('text', 'textarea')   
            ->add('save', 'submit')
            ->getForm();
    }

    public function getName()
    {
        return 'task';
    }
}