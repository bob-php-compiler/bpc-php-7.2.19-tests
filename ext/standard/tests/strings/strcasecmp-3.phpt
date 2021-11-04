--TEST--
strcasecmp() function
--FILE--
<?php

echo "\n#### checking error conditions ####";
strcasecmp("HI");

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strcasecmp(): 2 required, 1 provided in %s on line %d
 -- compile-error
