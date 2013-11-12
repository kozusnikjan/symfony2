<?php
// src/Acme/AdminBundle/Form/Type/NewsletterType.php
namespace Acme\EntityBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class NewsletterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text', array(
                                      'label' => false,
                                      'attr' => array(
                                        'placeholder' => 'Vaše jméno'
                                      )))
        ->add('email', 'email', array(
                                      'label' => false,
                                      'attr' => array(
                                        'placeholder' => 'Váš email'
                                      )))
        ->add('send', 'submit', array('label' => 'Chci 5 tipů'))
        ->getForm();
    }

    public function getName()
    {
        return 'Newsletter';
    }
}
