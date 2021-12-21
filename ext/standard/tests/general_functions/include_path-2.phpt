--TEST--
*_include_path() tests
--INI--
include_path=.
--FILE--
<?php

var_dump(restore_include_path(""));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function restore_include_path(): 0 at most, 1 provided in %s on line %d
 -- compile-error
