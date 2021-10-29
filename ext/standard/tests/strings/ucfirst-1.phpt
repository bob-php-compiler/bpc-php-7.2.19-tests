--TEST--
"ucfirst()" function
--FILE--
<?php

echo "\n#### error conditions ####";
/* Zero arguments */
ucfirst();

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function ucfirst(): 1 required, 0 provided in %s on line %d
 -- compile-error
