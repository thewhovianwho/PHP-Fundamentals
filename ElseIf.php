<?php

//$authors = ['Charles Dickens', 'Jane Austin', 'William Shakespeare', 'Louisa May Alcott', 'Mark Twain'];
//$authors = [];
$authors = ['Charles Dickens'];

$count = count($authors);

if($count == 1)
{
    echo "There is ".$count." author.";
}
elseif($count > 1)
{
    echo "There is a total of ".$count." author(s).";
}
else
{
    echo 'There are no authors in the list.';
}