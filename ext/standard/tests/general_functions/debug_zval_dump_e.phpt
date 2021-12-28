--TEST--
Test debug_zval_dump() function : error conditions
--FILE--
<?php
/* Prototype: void debug_zval_dump ( mixed $variable );
   Description: Dumps a string representation of an internal zend value
                to output.
*/

echo "*** Testing error conditions ***\n";

/* passing zero argument */
debug_zval_dump();

echo "Done\n";

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function debug_zval_dump(): 1 required, 0 provided in %s on line %d
 -- compile-error
