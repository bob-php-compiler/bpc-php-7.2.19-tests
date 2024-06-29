--TEST--
Passing a property fetch on a temporary by reference is not allowed
--FILE--
<?php

$fn = function(&$ref) {};
$fn([0, 1]->prop);

?>
--EXPECTF--
Parse error: %s in %s on line 4
