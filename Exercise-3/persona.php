<?php

/**
 * Class persona
 *
 * Description of the persona class:
 * This class defines a set of attributes pertaining to a person and provides methods to instantiate
 * the class and to get a query for database insertion.
 */
class persona
{
    /**
     * @var string $name First name of the person
     */
    public $name;

    /**
     * @var string $lastName Last name of the person
     */
    public $lastName;

    /**
     * @var string $address Address of the person.
     */
    public $address;

    /**
     * @var string $zipCode ZIP code of the person's residence
     */
    public $zipCode;

    /**
     * @var string $city City where person resides.
     */
    public $city;

    /**
     * @var string $nation Nation where person resides.
     */
    public $nation;

    /**
     * @var string $phoneNumber Person's contact number.
     */
    public $phoneNumber;

    /**
     * @var string $email Email address of the person.
     */
    public $email;

    /**
     * @var string $observations Miscellaneous observations.
     */
    public $observations;

    /**
     * @var string $sex Person's gender.
     */
    public $sex;

    /**
     * @var string $hobby Person's hobby.
     */
    public $hobby;

    /**
     * Constructor function of the class.
     *
     * @param array $data An array containing the attributes of the person. Use '$_POST'.
     */
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

    /**
     * Formulates SQL query to insert person's data into the database.
     *
     * @return string The SQL Insert query
     */
    function getQuery()
    {
        return "INSERT INTO users (name, lastName, address, zipCode, city, nation, phoneNumber, email, observations, sex, hobby)
                VALUES ('$this->name', '$this->lastName', '$this->address', '$this->zipCode', '$this->city', '$this->nation', '$this->phoneNumber', '$this->email', '$this->observations', '$this->sex', '$this->hobby')";
    }
}