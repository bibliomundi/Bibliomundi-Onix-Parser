<?php

namespace BBMParser\Model;

class Header
{
    private $sender;
    private $contact;
    private $email;
    private $message;

    public function getSender()
    {
        return $this->sender;
    }

    public function setSender($sender)
    {
        $this->sender = $sender;
    }

    public function getContact()
    {
        return $this->contact;
    }

    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getMessage(){
        return $this->message;
    }
    public function setMessage($message)
    {
        $this->message = $message;
    }
}