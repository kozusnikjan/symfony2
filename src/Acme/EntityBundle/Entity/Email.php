<?php
// src/Acme/EntityBundle/Entity/Email.php
namespace Acme\EntityBundle\Entity;



class Email{
        
    private $sender;
    
    private $recipient;
    
    private $subject;
    
    private $text;
    
    
    public function setSender($sender){
        $this->sender = $sender;
    }
    
    public function getSender(){
        return $this->sender;
    }
    
    public function setRecipient($recipient){
        $this->recipient = $recipient;
    }
    
    public function getRecipient(){
        return $this->recipient;
    }
    
    public function setSubject($subject){
        $this->subject = $subject;
    }
    
    public function getSubject(){
        return $this->subject;
    }
    
    public function setText($text){
        $this->text = $text;
    }
    
    public function getText(){
        return $this->text;
    }
    
}