<?php

$authors = ['Charles Dickens', 'Jane Austin', 'William Shakespeare', 'Louisa May Alcott', 'Mark Twain'];
//authors = [];
//authors = ['Charles Dickens'];

//$count = count($authors);

//$outcome = $count ? $count : 'Count Unavailable';
$outcome = $count ?? $anotherVariable ?? 'Count Unavailable.';
echo $outcome;

?>
