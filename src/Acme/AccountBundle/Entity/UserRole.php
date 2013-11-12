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
     @ORM\Id
     @ORM\Column(type="integer")
     @ORM\ManyToOne(targetEntity="User", cascade={"all"})
     */
    private $user_id;
    
    /**
     @ORM\Id 
     @ORM\Column(type="integer")
     @ORM\ManyToOne(targetEntity="Role", cascade={"all"})
     */
    private $role_id;



    /**
     * Set user_id
     *
     * @param integer $userId
     * @return UserRole
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;
    
        return $this;
    }

    /**
     * Get user_id
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set role_id
     *
     * @param integer $roleId
     * @return UserRole
     */
    public function setRoleId($roleId)
    {
        $this->role_id = $roleId;
    
        return $this;
    }

    /**
     * Get role_id
     *
     * @return integer 
     */
    public function getRoleId()
    {
        return $this->role_id;
    }
}