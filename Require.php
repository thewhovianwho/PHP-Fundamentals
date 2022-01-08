<?php

include 'Person.php';
include_once 'Author.php';

//THIS WON'T WORK! 
// include 'random.php';
require 'random.php';


$newAuthor = new Author('Agatha', 'Christie', '1890');
echo $newAuthor->getCompleteName();

?>