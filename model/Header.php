<?php

namespace BBM\model;

class Header
{
	private $senderName;
    private $contactName;
    private $emailAddress;
    private $sender;
	private $addressee;
	private $sentDateTime;

    /**
     * Gets the value of senderName.
     *
     * @return mixed
     */
    public function getSenderName()
    {
        return $this->senderName;
    }

    /**
     * Sets the value of senderName.
     *
     * @param mixed $senderName the sender name
     *
     * @return self
     */
    public function setSenderName($senderName)
    {
        $this->senderName = $senderName;
    }

    /**
     * Gets the value of contactName.
     *
     * @return mixed
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Sets the value of contactName.
     *
     * @param mixed $contactName the contact name
     *
     * @return self
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;
    }

    /**
     * Gets the value of emailAddress.
     *
     * @return mixed
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Sets the value of emailAddress.
     *
     * @param mixed $emailAddress the email address
     *
     * @return self
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * Gets the value of sender.
     *
     * @return mixed
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Sets the value of sender.
     *
     * @param mixed $sender the sender
     *
     * @return self
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
    }

    /**
     * Gets the value of addressee.
     *
     * @return mixed
     */
    public function getAddressee()
    {
        return $this->addressee;
    }

    /**
     * Sets the value of addressee.
     *
     * @param mixed $addressee the addressee
     *
     * @return self
     */
    public function setAddressee($addressee)
    {
        $this->addressee = $addressee;
    }

    /**
     * Gets the value of sentDateTime.
     *
     * @return mixed
     */
    public function getSentDateTime()
    {
        return $this->sentDateTime;
    }

    /**
     * Sets the value of sentDateTime.
     *
     * @param mixed $sentDateTime the sent date time
     *
     * @return self
     */
    public function setSentDateTime($sentDateTime)
    {
        $this->sentDateTime = $sentDateTime;
    }
}