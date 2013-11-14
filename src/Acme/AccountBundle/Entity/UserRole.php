<?php
// src/Acme/AccountBundle/Entity/UserRole.php
namespace Acme\AccountBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
//use Symfony\Component\Security\Core\User\AdvancedUserInterface;
//use Doctrine\Common\Collections\ArrayCollection;


/**
 * Acme\AccountBundle\Entity\UserRole
 *@ORM\Entity()
 *@ORM\Table(name="user_role")
 */
class UserRole
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** 
     * @ORM\ManyToOne(targetEntity="User", inversedBy="userRoles", cascade={"all"})
     */
    private $user;
    
    /**
     * @ORM\ManyToOne(targetEntity="Role", cascade={"all"})
     */
    private $role;



    /**
     * Set user_id
     *
     * @param integer $userId
     * @return UserRole
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user_id
     *
     * @return integer 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set role_id
     *
     * @param integer $roleId
     * @return UserRole
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role_id
     *
     * @return integer 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}