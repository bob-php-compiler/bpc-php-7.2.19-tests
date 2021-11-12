--TEST--
Test is_writable() and its alias is_writeable() function: error conditions
--FILE--
<?php
/* Prototype: bool is_writable ( string $filename );
   Description: Tells whether the filename is writable.

   is_writeable() is an alias of is_writable()
*/

echo "*** Testing is_writable(): error conditions ***\n";
var_dump( is_writeable() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function is_writeable(): 1 required, 0 provided in %s on line %d
 -- compile-error
