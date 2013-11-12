<?php
// src/Acme/AdminBundle/Form/Type/MessagesWebType.php
namespace Acme\EntityBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class MessagesWebType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('subject', 'text', array('label' => 'Předmět'))
        ->add('sender', 'text', array('label' => 'Váš email'))
        ->add('content', 'textarea', array('label' => 'Text zprávy'))
        ->add('save', 'submit', array('label' => 'Odeslat'))
        ->getForm();
    }

    public function getName()
    {
        return 'MessagesWeb';
    }
}
