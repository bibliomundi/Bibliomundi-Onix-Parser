<?php

namespace BBMParser\Model;

class Header
{
    private $sender;
    private $contact;
    private $email;
    private $sentDateTime;
    public $xml;

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
    

    public function getSentDateTime()
    {
        return $this->sentDateTime;
    }

    public function setSentDateTime($sentDateTime)
    {
        $this->sentDateTime = $sentDateTime;
    }

    public function getXml()
    {
        if (!empty($this->xml)) {
            return $this->xml->asXML();
        }

        return null;
    }

    public function setXml($xml)
    {
        $this->xml = $xml;
    }
}