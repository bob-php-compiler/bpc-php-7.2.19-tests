--TEST--
Trying to use lambda in array offset
--FILE--
<?php

$test[function(){}] = 1;
$a{function() { }} = 1;

?>
--EXPECTF--
Parse error: %s in %s on line %d
