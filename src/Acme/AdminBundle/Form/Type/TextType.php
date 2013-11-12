<?php
// src/Acme/AdminBundle/Form/Type/TaskType.php
namespace Acme\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TextType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', 'text')
            ->add('content', 'textarea')   
            ->add('save', 'submit')
            ->getForm();
    }

    public function getName()
    {
        return 'text';
    }
}