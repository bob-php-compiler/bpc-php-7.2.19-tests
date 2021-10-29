--TEST--
"ucfirst()" function
--FILE--
<?php

echo "\n#### error conditions ####";
/* More than expected no. of args */
ucfirst((int)10, (int)20);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function ucfirst(): 1 at most, 2 provided in %s on line %d
 -- compile-error
