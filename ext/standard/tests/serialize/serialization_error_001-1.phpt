--TEST--
Test serialize() & unserialize() functions: error conditions - wrong number of args.
--FILE--
<?php
var_dump( serialize() );
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function serialize(): 1 required, 0 provided in %s on line %d
 -- compile-error
