--TEST--
builtin functions tests
--FILE--
<?php

var_dump(get_loaded_extensions(true));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function get_loaded_extensions(): 0 at most, 1 provided in %s on line %d
 -- compile-error
