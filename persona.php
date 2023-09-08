<?php

class persona
{
    public $name;
    public $lastName;
    public $address;
    public $zipCode;
    public $city;
    public $nation;
    public $phoneNumber;
    public $email;
    public $observations;
    public $sex;
    public $hobby;

    function __construct($data)
    {
        $this->name = $data['name'];
        $this->lastName = $data['lastName'];
        $this->address = $data['address'];
        $this->zipCode = $data['zipCode'];
        $this->city = $data['city'];
        $this->nation = $data['nation'];
        $this->phoneNumber = $data['phoneNumber'];
        $this->email = $data['email'];
        $this->observations = $data['observations'];
        $this->sex = $data['sex'];
        $this->hobby = $data['hobby'];
    }

    function getQuery()
    {
        return "INSERT INTO users (name, lastName, address, zipCode, city, nation, phoneNumber, email, observations, sex, hobby)
                VALUES ('$this->name', '$this->lastName', '$this->address', '$this->zipCode', '$this->city', '$this->nation', '$this->phoneNumber', '$this->email', '$this->observations', '$this->sex', '$this->hobby')";
    }
}