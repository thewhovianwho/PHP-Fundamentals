<?php

define("NEW_CONSTANT", 'Yes, I am a constant!');

$intVar = 1234;
$stringVar = 'Hello!';
$boolVar = false;
$floatVar = 12.34;

/*
echo is_string($stringVar);
echo is_bool($boolVar);
echo is_float($floatVar);
 */

echo defined('NEW_CONSTANT');

?>

