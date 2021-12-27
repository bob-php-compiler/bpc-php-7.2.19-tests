--TEST--
Test property_exists() function : error conditions
--FILE--
<?php
/* Prototype  : bool property_exists(mixed object_or_class, string property_name)
 * Description: Checks if the object or class has a property
 * Source code: Zend/zend_builtin_functions.c
 * Alias to functions:
 */

echo "*** Testing property_exists() : error conditions ***\n";

$object_or_class = "obj";


echo "\n-- Testing property_exists() function with less than expected no. of arguments --\n";
var_dump( property_exists($object_or_class) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function property_exists(): 2 required, 1 provided in %s on line %d
 -- compile-error
