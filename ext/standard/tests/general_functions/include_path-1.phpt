--TEST--
*_include_path() tests
--INI--
include_path=.
--FILE--
<?php

var_dump(get_include_path("var"));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function get_include_path(): 0 at most, 1 provided in %s on line %d
 -- compile-error
