--TEST--
Object type can only default to null
--FILE--
<?php

function test(object $obj = 42) { }

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Default value for parameters with an object type can only be NULL in %s on line %d
 -- compile-error
