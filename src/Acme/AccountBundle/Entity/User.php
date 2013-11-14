<?php
// src/Acme/AccountBundle/Entity/User.php
namespace Acme\AccountBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Acme\AccountBundle\Entity\User
 *
 * @ORM\Table(name="acme_users")
 * @ORM\Entity(repositoryClass="Acme\AccountBundle\Entity\UserRepository")
 */
class User implements AdvancedUserInterface, \Serializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $salt;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=60, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    /**
     * @ORM\OneToMany(targetEntity="UserRole", mappedBy="user", cascade={"all"})
     */
    private $userRoles;
    
    public function __construct()
    {
        $this->userRoles = new ArrayCollection();
    }

    /**
     * @inheritDoc
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @inheritDoc
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * @inheritDoc
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
		$roles = array();
		foreach ($this->userRoles as $userRole) {
			$roles[] = $userRole->getRole();
		}
        return $roles;
    }

	public function addUserRole($userRole)
	{
		$this->userRoles->add($userRole);
		return $this;
	}
	
	public function getUserRoles()
	{
		return $this->userRoles;
	}
	
    public function setUserRoles($userRoles)
    {
        $this->userRoles = $userRoles;
        return $this;
    }
    
    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
        ) = unserialize($serialized);
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

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    
        return $this;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    
        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
    
    public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return $this->isActive;
    }
    
    


    /**
     * Add roles
     *
     * @param \Acme\AccountBundle\Entity\UserRole $roles
     * @return User
     */
    public function addRole(\Acme\AccountBundle\Entity\UserRole $roles)
    {
        $this->roles[] = $roles;
    
        return $this;
    }

    /**
     * Remove roles
     *
     * @param \Acme\AccountBundle\Entity\UserRole $roles
     */
    public function removeRole(\Acme\AccountBundle\Entity\UserRole $roles)
    {
        $this->roles->removeElement($roles);
    }

    /**
     * Remove userRoles
     *
     * @param \Acme\AccountBundle\Entity\UserRole $userRoles
     */
    public function removeUserRole(\Acme\AccountBundle\Entity\UserRole $userRoles)
    {
        $this->userRoles->removeElement($userRoles);
    }
}