<?php
// src/Acme/AccountBundle/Form/Model/Registration.php
namespace Acme\AccountBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;

use Acme\AccountBundle\Entity\User;

class Registration
{
    /**
     * @Assert\Type(type="Acme\AccountBundle\Entity\User")
     * @Assert\Valid()
     */
    protected $user;

    

    public function setUser(User $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }

    
}