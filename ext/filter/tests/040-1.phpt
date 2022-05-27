--TEST--
filter_has_var() tests
--FILE--
<?php

var_dump(filter_has_var());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function filter_has_var(): 2 required, 0 provided in %s on line %d
 -- compile-error
