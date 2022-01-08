<?php

function bookByAuthorYear($tempAuthorName = 'Agatha Christie', $tempYear = 1910)
{
    echo $tempYear;
    echo "\n";  # don't use '', use ""
    echo $tempAuthorName;
    echo "\n";
}


function getAuthor()
{
    return 'Charles Dickens';
}

$authorName = getAuthor();

bookByAuthorYear($authorName);

?>