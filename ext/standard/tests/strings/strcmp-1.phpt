--TEST--
strcmp() function
--FILE--
<?php

echo "\n#### checking error conditions ####";
strcmp();

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strcmp(): 2 required, 0 provided in %s on line %d
 -- compile-error
