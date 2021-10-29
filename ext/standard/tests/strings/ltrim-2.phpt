--TEST--
Test ltrim() function
--FILE--
<?php

/*  Testing for Error conditions  */

/*  Invalid Number of Arguments */

 echo "\n *** Output for Error Conditions ***\n";

 echo "\n *** Output for more than valid number of arguments (Valid are 1 or 2 arguments) ***\n";
 var_dump( ltrim("", " ", 1) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function ltrim(): 2 at most, 3 provided in %s on line %d
 -- compile-error
