--TEST--
Testing substr() function
--FILE--
<?php

/* Prototype: string substr( string str, int start[, int length] )
 * Description: Returns the portion of string specified by the start and length parameters.
 */

/* Testing for error conditions */
echo "*** Testing for error conditions ***\n";

/* Scalar Argument */
var_dump( substr(12345) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function substr(): 2 required, 1 provided in %s on line %d
 -- compile-error
