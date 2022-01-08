<?php

function bookByAuthorYear($tempAuthorName = 'Agatha Christie', $tempYear = 1910)
{
    echo $tempYear;
    echo "\n";  # don't use '', use ""
    echo $tempAuthorName;
}


// Uncomment for usage of NON-DEFAULT parameters. 

/*
$authorName = 'William Shakespeare';
$year = 1950;
bookByAuthorYear($authorName, $year);
*/

bookByAuthorYear();




