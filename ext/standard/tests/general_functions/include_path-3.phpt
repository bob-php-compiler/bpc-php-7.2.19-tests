--TEST--
*_include_path() tests
--INI--
include_path=.
--FILE--
<?php

var_dump(set_include_path());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function set_include_path(): 1 required, 0 provided in %s on line %d
 -- compile-error
