<?php
// src/Acme/AccountBundle/Form/Type/RegistrationType.php
namespace Acme\AccountBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('user', new UserType());
//        $builder->add('userRole', 'choice', array(
//                'choices' => array('1' => 'ROLE_ADMIN', '2' => 'ROLE_USER')
//                ));
        $builder->add('save', 'submit');
    }

    public function getName()
    {
        return 'registration';
    }
}