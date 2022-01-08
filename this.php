<?php

class Person
{
    const AVG_LIFE_SPAN = 79;

    public $firstName = 'Laura';
    public $lastName = 'Manoliu';
    public $yearBorn = 1995;
    
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


?>