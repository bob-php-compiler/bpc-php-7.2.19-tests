--TEST--
Test copy() function: error conditions
--FILE--
<?php
/* Prototype: bool copy ( string $source, string $dest );
 * Description: Makes a copy of the file source to dest.
 *              Returns TRUE on success or FALSE on failure.
 */

echo "*** Testing copy() function: error conditions --\n";

/* No.of args less than expected */
var_dump( copy() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function copy(): 2 required, 0 provided in %s on line %d
 -- compile-error
