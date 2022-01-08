<?php

class Person
{
    const AVG_LIFE_SPAN = 79;

    public $firstName;
    public $lastName;
    public $yearBorn;
    
    function __construct($tempFirst="", $tempLast="", $tempBorn="")
    {
        echo "Person Constructor\n";
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
    
    function getFullName()
    {
        echo "Person->getFullName()".PHP_EOL;   
        // PHP_EOL INSTEAD OF \n  
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }
}

class Author extends Person
{
    public $penName = "Mark Twain";
    
    public function getPenName()
    {
        return $this->penName.PHP_EOL;
    }
    
    function getFullName()
    {
        echo "Author->getFullName()".PHP_EOL;   
        // PHP_EOL INSTEAD OF \n  
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }
}


$newAuthor = new Author('Laura', 'Manoliu', 1995);
echo $newAuthor->getFullName();


?>