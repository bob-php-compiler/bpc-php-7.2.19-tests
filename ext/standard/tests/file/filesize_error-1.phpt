--TEST--
Test filesize() function: error conditions
--FILE--
<?php
/*
 * Prototype   : int filesize ( string $filename );
 * Description : Returns the size of the file in bytes, or FALSE
 *               (and generates an error of level E_WARNING) in case of an error.
 */

echo "*** Testing filesize(): error conditions ***";

/* No.of arguments less than expected */
var_dump( filesize() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function filesize(): 1 required, 0 provided in %s on line %d
 -- compile-error
