--TEST--
builtin functions tests
--FILE--
<?php

var_dump(get_defined_constants(true, true));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function get_defined_constants(): 1 at most, 2 provided in %s on line %d
 -- compile-error
