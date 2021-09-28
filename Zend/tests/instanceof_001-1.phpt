--TEST--
Testing instanceof operator with several operators
--FILE--
<?php

$a = new stdClass;

var_dump("$a" instanceof stdClass);

?>
--EXPECTF--
Parse error: instanceof expects an object instance, literal-string given in %s on line 5
