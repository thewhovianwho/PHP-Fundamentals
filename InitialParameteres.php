<?php

class Person
{
    const AVG_LIFE_SPAN = 79;

    public $firstName;
    public $lastName;
    public $yearBorn;
    
    function __construct($tempFirst="", $tempLast="", $tempBorn="")
    {
        // echo "I'm in the constructor!";
        $this->firstName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearBorn = $tempBorn;
     
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

$myObject = new Person('Laura', 'Manoliu', 1995);

echo $myObject->yearBorn;

?>