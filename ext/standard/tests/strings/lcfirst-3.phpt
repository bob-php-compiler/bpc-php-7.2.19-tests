--TEST--
"lcfirst()" function
--FILE--
<?php

echo "\n#### error conditions ####";
/* More than expected no. of args */
lcfirst((int)10, (int)20);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function lcfirst(): 1 at most, 2 provided in %s on line %d
 -- compile-error
