<?php

$authors = array('Charles Dickens', 'Jane Austin', 'William Shakespeare', 'Jules Vernes');

$authorsAssociative = array(
    'quarky' => 'Charles Dickens',
    'sappy' => 'Jane Austin',
    'poetic' => 'William Shakespeare',
    'classic' => 'Mark Twain',
    'science fiction' => 'Jules Vernes'
);

sort($authors);
print_r($authors);

// asort($authorsAssociative);
// print_r($authorsAssociative);

ksort($authorsAssociative);
print_r($authorsAssociative);

?>
