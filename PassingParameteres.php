<?php

function bookByAuthorYear($authorName, $year)
{
    echo $year;
    echo "\n";  # don't use '', use ""
    echo $authorName;
}

$authorName = 'William Shakespeare';
$year = 1910;

bookByAuthorYear($authorName, $year);

?>