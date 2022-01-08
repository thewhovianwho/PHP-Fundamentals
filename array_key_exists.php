<?php

$authors = array('Charles Dickens', 'Jane Austin', 'William Shakespeare');

$authorsAssociative = array(
    'quarky' => 'Charles Dickens',
    'brilliant' => 'Jane Austin',
    'poetic' => 'William Shakespeare'
);


echo array_key_exists('poetic', $authorsAssociative);
//echo array_key_exists(1, $authors);
//echo array_key_exists(5, $authors);
//echo $authorsAssociative['brilliant'];
//echo $authors[1];

?>