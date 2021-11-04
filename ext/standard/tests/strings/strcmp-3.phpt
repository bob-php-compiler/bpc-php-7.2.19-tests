--TEST--
strcmp() function
--FILE--
<?php

echo "\n#### checking error conditions ####";
strcmp("HI");

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strcmp(): 2 required, 1 provided in %s on line %d
 -- compile-error
