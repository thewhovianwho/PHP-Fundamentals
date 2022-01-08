<?php

class Person
{
    public $firstName = 'Laura';
    public $lastName = 'Manoliu';
    public $yearBorn = 1995;
    
}

$myObject = new Person();
echo $myObject -> firstName."\n";

$myObject->firstName = 'Cristina';
echo $myObject->firstName;

?>

