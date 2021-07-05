--TEST--
get_included_files() tests
--FILE--
<?php

var_dump(get_included_files(1,1));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function get_included_files(): 0 at most, 2 provided in %s on line %d
 -- compile-error
