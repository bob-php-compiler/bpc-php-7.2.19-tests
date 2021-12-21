--TEST--
Test get_loaded_extensions() function : error conditions
--FILE--
<?php
/* Prototype  : array get_loaded_extensions  ([ bool $zend_extensions= false  ] )
 * Description:  Returns an array with the names of all modules compiled and loaded
 * Source code: Zend/zend_builtin_functions.c
 */

echo "*** Testing get_loaded_extensions() : error conditions ***\n";

echo "\n-- Testing get_loaded_extensions() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump( get_loaded_extensions($extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function get_loaded_extensions(): 0 at most, 1 provided in %s on line %d
 -- compile-error
