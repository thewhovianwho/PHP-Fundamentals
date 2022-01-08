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

class Author extends Person
{
    private $penName = 'Name Surname';
    public static $centuryPopular = '21st';
    
    
    public static function getCenturyPersonWasPopular()
    {
       
    }
    
    public function getPenName()
    {
        return $this->penName.PHP_EOL;
    }
    
    function getCompleteName()
    {
        // PHP_EOL INSTEAD OF \n  
        return $this->getFullName()." a.k.a. ".$this->penName.PHP_EOL;
    }
}


$newAuthor = new Author('Laura', 'Manoliu', 1995);
echo $newAuthor->getCompleteName();


?>