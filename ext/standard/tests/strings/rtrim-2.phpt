--TEST--
Testing rtrim() function
--FILE--
<?php

/*  Testing for Error conditions  */

/*  Invalid Number of Arguments */

 echo "\n *** Output for Error Conditions ***\n";
 rtrim("", " ", 1);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function rtrim(): 2 at most, 3 provided in %s on line %d
 -- compile-error
