<?php

class Author extends Person
{
    private $penName = 'Name Surname';
    public static $centuryPopular = '21st';
    
    
    public static function getCenturyPersonWasPopular()
    {
       return self::$centuryPopular.PHP_EOL; //self:: for static properties, not .this->
       
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

?>