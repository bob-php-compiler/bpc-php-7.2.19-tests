--TEST--
Test serialize() & unserialize() functions: error conditions - wrong number of args.
--FILE--
<?php
var_dump( serialize(1,2) );
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function serialize(): 1 at most, 2 provided in %s on line %d
 -- compile-error
