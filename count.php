<?php

// $authors = array('Charles Dickens', 'Jane Austin', 'William Shakespeare', 'Jules Vernes');
// echo count($authors);


$authors = [
    'Male' => array(
        'Charles Dickens' => array('A Christmas Carol', 'Oliver Twist'),
        'William Shakespeare' => array('Romeo & Juliet', 'Richard III'),
        'Mark Twain' => array('Tom Sawyer', 'Huckleberry Finn')
    ),
    
    'Female' => array(
        'L.M. Montgomery' => array('Anne of Green Gables', 'Anne of Avonlea'),
        'Louisa May Alcott' => array('Little Women')
    )
    ];

// echo count($authors, 1);
echo count($authors, COUNT_RECURSIVE); // same as line 20 

?>

