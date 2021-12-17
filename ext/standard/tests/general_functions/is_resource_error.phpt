--TEST--
Test is_resource() function : error conditions
--FILE--
<?php
/* Prototype  : bool is_resource  ( mixed $var  )
 * Description:  Finds whether a variable is a resource
 * Source code: ext/standard/type.c
 */

echo "*** Testing is_resource() : error conditions ***\n";

echo "\n-- Testing is_resource() function with Zero arguments --\n";
var_dump( is_resource() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function is_resource(): 1 required, 0 provided in %s on line %d
 -- compile-error
