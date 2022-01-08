<?php

$authors = array('Charles Dickens', 'Jane Austin', 'William Shakespeare');

array_push($authors, 'Jules Vernes');

$authors[] = 'Agatha Christie'; 
$authors['mysterious'] = 'Agatha Christie';

print_r($authors);

?>