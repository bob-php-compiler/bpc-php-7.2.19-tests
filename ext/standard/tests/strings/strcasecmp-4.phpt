--TEST--
strcasecmp() function
--FILE--
<?php

echo "\n#### checking error conditions ####";
strcasecmp("Hi", "Hello", "World");

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function strcasecmp(): 2 at most, 3 provided in %s on line %d
 -- compile-error
