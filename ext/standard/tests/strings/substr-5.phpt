--TEST--
Testing substr() function
--FILE--
<?php

/* Prototype: string substr( string str, int start[, int length] )
 * Description: Returns the portion of string specified by the start and length parameters.
 */

/* Testing for error conditions */
echo "*** Testing for error conditions ***\n";

/* more than valid number of arguments ( valid are 2 or 3 ) */
var_dump( substr("abcde", 2, 3, 4) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function substr(): 3 at most, 4 provided in %s on line %d
 -- compile-error
