--TEST--
input_get()
--FILE--
<?php
var_dump(filter_var("", "", "", "", ""));
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function filter_var(): 3 at most, 5 provided in %s on line %d
 -- compile-error
