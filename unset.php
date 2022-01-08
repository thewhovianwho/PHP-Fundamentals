<?php

$authors = array('Charles Dickens', 'Jane Austin', 'William Shakespeare');

$authorsAssociative = array(
    'quarky' => 'Charles Dickens',
    10 => 'Jane Austin',
    'poetic' => 'William Shakespeare',
    'Mark Twain'
);


unset($authors[1], $authors[2]); // remove second item in array 
unset($authorsAssociative[10]);

print_r($authors);
print_r($authorsAssociative);

unset($authors);


?>

