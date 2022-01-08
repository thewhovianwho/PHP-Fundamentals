<?php

class Person
{
    const AVG_LIFE_SPAN = 79;

    private $firstName;
    private $lastName;
    private $yearBorn;
    
    function __construct($tempFirst="", $tempLast="", $tempBorn="")
    {
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
    
    protected function getFullName()
    {
        // PHP_EOL INSTEAD OF \n  
        return $this->firstName." ".$this->lastName;
    }
}

?>
