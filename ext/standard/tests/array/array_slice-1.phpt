--TEST--
Testing array_slice() function
--FILE--
<?php

/* Zero args */
echo"\n*** Output for Zero Argument ***\n";
array_slice();

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_slice(): 2 required, 0 provided in %s on line %d
 -- compile-error
