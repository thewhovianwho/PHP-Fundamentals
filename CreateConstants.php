<?php

class Person
{
    const AVG_LIFE_SPAN = 79;

    public $firstName = 'Laura';
    public $lastName = 'Manoliu';
    public $yearBorn = 1995;
    
}

$myObject = new Person();

echo Person::AVG_LIFE_SPAN;


?>