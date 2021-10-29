--TEST--
"lcfirst()" function
--FILE--
<?php

echo "\n#### error conditions ####";
/* Zero arguments */
lcfirst();

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function lcfirst(): 1 required, 0 provided in %s on line %d
 -- compile-error
