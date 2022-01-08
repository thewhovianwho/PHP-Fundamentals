<?php

class Person
{
    const AVG_LIFE_SPAN = 79;

    public $firstName;
    public $lastName;
    public $yearBorn;
    
    function __construct()
    {
        // echo "I'm in the constructor!";
        $this->firstName = 'Laura';
        $this->lastName = 'Manoliu';
        $this->yearBorn = 1995;
     
    }
    
    function getFirstName()
    {
        return $this->firstName;
    }
    
    function setFirstName($tempName)
    {
        $this->firstName = $tempName;
    }
}

$myObject = new Person();

echo $myObject->getFirstName();

?>