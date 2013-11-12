<?php
// src/Acme/EntityBundle/Entity/Task.php
namespace Acme\EntityBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tasks")
 */
class Task {
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
        
     /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;
    
     /**
     * @ORM\Column(type="datetime")
     */
    protected $dueDate;
    
     /**
     * @ORM\Column(type="text")
     */
    protected $text;

    /**
     * @ORM\Column(type="integer")
     */
    protected $author;
    
    public function getName(){
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDueDate()
    {
        return $this->dueDate;
    }
    public function setDueDate(\DateTime $dueDate = null)
    {
        $this->dueDate = $dueDate;
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
     * Set text
     *
     * @param string $text
     * @return Task
     */
    public function setText($text)
    {
        $this->text = $text;
    
        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set author
     *
     * @param integer $author
     * @return Task
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    
        return $this;
    }

    /**
     * Get author
     *
     * @return integer 
     */
    public function getAuthor()
    {
        return $this->author;
    }
}