<?php

function setAuthorName()
{
    global  $authorName;
    $authorName = 'Charles Dickens';    
}

$authorName = 'William Shakespeare';

setAuthorName();

echo $authorName;

?>