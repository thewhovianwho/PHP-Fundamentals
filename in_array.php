<?php

$authors = array('Charles Dickens', 'Jane Austin', 'William Shakespeare', 13);


echo in_array('Jane Austin', $authors);
echo "\n";
echo in_array('Jules Vernes', $authors); // not in array, exit code 0 
echo in_array(13, $authors, true); 
echo "\n";
echo in_array('13', $authors, true); // false, exit code 0 

?>

