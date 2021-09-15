--TEST--
Call internal function with incorrect number of arguments
--FILE--
<?php
substr("foo");
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function substr(): 2 required, 1 provided in %s on line %d
 -- compile-error
