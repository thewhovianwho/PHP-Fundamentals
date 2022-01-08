<?php

include 'Person.php';
include_once 'Author.php';

$newAuthor = new Author('Agatha', 'Christie', '1890');
echo $newAuthor->getCompleteName();

?>