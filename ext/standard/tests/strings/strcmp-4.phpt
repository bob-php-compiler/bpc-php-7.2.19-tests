--TEST--
strcmp() function
--FILE--
<?php

echo "\n#### checking error conditions ####";
strcmp("Hi", "Hello", "World");

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function strcmp(): 2 at most, 3 provided in %s on line %d
 -- compile-error
