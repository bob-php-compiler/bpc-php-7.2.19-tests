--TEST--
Testing substr() function
--FILE--
<?php

/* Prototype: string substr( string str, int start[, int length] )
 * Description: Returns the portion of string specified by the start and length parameters.
 */

/* Testing for error conditions */
echo "*** Testing for error conditions ***\n";

/* Zero Argument */
var_dump( substr() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function substr(): 2 required, 0 provided in %s on line %d
 -- compile-error
