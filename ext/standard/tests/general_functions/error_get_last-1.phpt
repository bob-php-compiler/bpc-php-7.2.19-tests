--TEST--
error_get_last() tests
--FILE--
<?php

var_dump(error_get_last(true));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function error_get_last(): 0 at most, 1 provided in %s on line %d
 -- compile-error
