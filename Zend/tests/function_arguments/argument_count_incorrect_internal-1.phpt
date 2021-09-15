--TEST--
Call internal function with incorrect number of arguments
--FILE--
<?php
array_diff(array());
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_diff(): 2 required, 1 provided in %s on line %d
 -- compile-error
