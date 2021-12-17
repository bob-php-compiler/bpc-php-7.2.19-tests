--TEST--
Test print_r() function
--FILE--
<?php

echo "\n\n*** Testing error conditions ***\n";
//passing zero argument
var_dump( print_r() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function print_r(): 1 required, 0 provided in %s on line %d
 -- compile-error
