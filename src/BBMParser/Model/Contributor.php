<?php

namespace BBMParser\Model;

abstract class Contributor
{
    private $id;
    private $role;
	private $preferenceOrderExibition;
	private $typeName;
	private $name;
	private $lastName;
	private $biography;
    private $website;
	private $territoriality;


    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    /**
     * Gets the value of preferenceOrderExibition.
     *
     * @return mixed
     */
    public function getPreferenceOrderExibition()
    {
        return $this->preferenceOrderExibition;
    }

    /**
     * Sets the value of preferenceOrderExibition.
     *
     * @param mixed $preferenceOrderExibition the preference order exibition
     *
     * @return self
     */
    public function setPreferenceOrderExibition($preferenceOrderExibition)
    {
        $this->preferenceOrderExibition = (int) $preferenceOrderExibition;
    }

    /**
     * Gets the value of typeName.
     *
     * @return mixed
     */
    public function getTypeName()
    {
        return $this->typeName;
    }

    /**
     * Sets the value of typeName.
     *
     * @param mixed $typeName the type name
     *
     * @return self
     */
    public function setTypeName($typeName)
    {
        $this->typeName = $typeName;
    }

    /**
     * Gets the value of name.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the value of name.
     *
     * @param mixed $name the name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Gets the value of lastName.
     *
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets the value of lastName.
     *
     * @param mixed $lastName the last name
     *
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

    }

    /**
     * Gets the value of name and lastName.
     *
     * @return mixed
     */

    public function getFullName()
    {
        return $this->name . ' ' . $this->lastName;
    }

    /**
     * Gets the value of name and lastName statically.
     *
     * @return array
     */
    public static function getFullNameStatically(Contributor $contributor)
    {
        return $contributor->getName() . ' ' . $contributor->getLastName();
    }

    /**
     * Gets the value of biography.
     *
     * @return mixed
     */
    public function getBiography()
    {
        return $this->biography;
    }

    /**
     * Sets the value of biography.
     *
     * @param mixed $biography the biography
     *
     * @return self
     */
    public function setBiography($biography)
    {
        $this->biography = $biography;

    }

    /**
     * Gets the value of website.
     *
     * @return mixed
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Sets the value of website.
     *
     * @param mixed $website the website
     *
     * @return self
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * Gets the value of website.
     *
     * @return mixed
     */
    public function getTerritoriality()
    {
        return $this->territoriality;
    }

    /**
     * Sets the value of territoriality.
     *
     * @param mixed $territoriality the territoriality
     *
     * @return self
     */
    public function setTerritoriality($territoriality)
    {
        $this->territoriality = $territoriality;
    }

}