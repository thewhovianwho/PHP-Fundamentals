<?php

$readingIsFun = true;
$authors = ['Charles Dickens', 'Jane Austin', 'William Shakespeare', 'Louisa May Alcott', 'Mark Twain'];
//$authors = [];
$i= 0;
$count = count($authors);


if($count > 0) :
    echo "There is a total of ".$count." author(s).".PHP_EOL;
else :
    echo "There are no authors in the list.".PHP_EOL;
endif;

while($i < 5) :
    echo "Reading is fun!".PHP_EOL;
    $i++;
endwhile;

for($i=0;$i< 5;$i++) :
    echo "Reading is fun!".PHP_EOL;
endfor;

?>
