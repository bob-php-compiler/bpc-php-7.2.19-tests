--TEST--
Testing rtrim() function
--FILE--
<?php

/*  Testing for Error conditions  */

/*  Invalid Number of Arguments */

 echo "\n *** Output for Error Conditions ***\n";
 rtrim();

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function rtrim(): 1 required, 0 provided in %s on line %d
 -- compile-error
