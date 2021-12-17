--TEST--
Test print_r() function
--FILE--
<?php

echo "\n\n*** Testing error conditions ***\n";

//passing more than required no. of arguments
var_dump( print_r(123, true, "abc") );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function print_r(): 2 at most, 3 provided in %s on line %d
 -- compile-error
