<?php

//$authors = ["Charles Dickens", "Jane Austin", "William Shakespeare", "Louisa May Alcott", "Mark Twain"];
$authors = [];
//authors = ["Charles Dickens"];

$count = count($authors);

/*
if($count == 1)
{
    echo "There is ".$count." author.".PHP_EOL;
}
elseif($count > 1)
{
    echo "There is a total of ".$count." author(s).".PHP_EOL;
}
else
{
    echo "There are no authors in the list.".PHP_EOL;
}
 */

/*
switch($count)
{
    case 0:
        echo "There are no authors.".PHP_EOL;
        break;
    case 1:
        echo "There is 1 author.".PHP_EOL;
        break;
    default:
        echo "There is a total of ".$count." author(s).".PHP_EOL;
}
 */

switch(5 <=> 7)
{
    case 1:
        echo "Greather than.".PHP_EOL;
        break;
    case 0:
        echo "Equal.".PHP_EOL;
        break;
    case -1:
        echo "Less than.".PHP_EOL;
        break;
}