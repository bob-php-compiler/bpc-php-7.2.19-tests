--TEST--
Test serialize() & unserialize() functions: error conditions - wrong number of args.
--FILE--
<?php
var_dump( unserialize(1,2,3) );
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function unserialize(): 2 at most, 3 provided in %s on line %d
 -- compile-error
