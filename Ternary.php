<?php

$authors = ['Charles Dickens', 'Jane Austin', 'William Shakespeare', 'Louisa May Alcott', 'Mark Twain'];
//authors = [];
//authors = ['Charles Dickens'];

$count = count($authors);

//$outcome = ($count > 0) ? "Author Total: ".$count : "No Authors";
$outcome = ($count > 6) ? "Author Total: ".$count : "No Authors";
echo $outcome;

?>
