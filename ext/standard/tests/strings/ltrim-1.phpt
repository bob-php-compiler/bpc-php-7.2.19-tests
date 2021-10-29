--TEST--
Test ltrim() function
--FILE--
<?php

/*  Testing for Error conditions  */

/*  Invalid Number of Arguments */

 echo "\n *** Output for Error Conditions ***\n";

 echo "\n *** Output for zero argument ***\n";
 var_dump( ltrim() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function ltrim(): 1 required, 0 provided in %s on line %d
 -- compile-error
