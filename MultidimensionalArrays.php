<?php

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

print_r($authors['Male']['William Shakespeare'][1]);

?>

