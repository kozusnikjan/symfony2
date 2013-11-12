<?php
// src/Acme/EntityBundle/Entity/MessagesWeb.php
namespace Acme\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="messages_web")
 */
class MessagesWeb {
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
        
     /**
     * @ORM\Column(type="string", length=100)
     */
    protected $subject;
    

    /**
     * @ORM\Column(type="text")
     */    
    protected $content;

    /**
     *  @ORM\Column(type="string", length=50)
     */
    protected $sender;
        
     /**
     * @ORM\Column(type="datetime")
     */
    protected $date;
    




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
     * Set subject
     *
     * @param string $subject
     * @return MessagesWeb
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    
        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return MessagesWeb
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set sender
     *
     * @param string $sender
     * @return MessagesWeb
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
    
        return $this;
    }

    /**
     * Get sender
     *
     * @return string 
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return MessagesWeb
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
}