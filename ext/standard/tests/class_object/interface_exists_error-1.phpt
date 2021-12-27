--TEST--
Test interface_exists() function : error conditions
--FILE--
<?php
/* Prototype  : bool interface_exists(string classname [, bool autoload])
 * Description: Checks if the class exists
 * Source code: Zend/zend_builtin_functions.c
 * Alias to functions:
 */

echo "*** Testing interface_exists() : error conditions ***\n";

//Test interface_exists with one more than the expected number of arguments
echo "\n-- Testing interface_exists() function with more than expected no. of arguments --\n";
$classname = 'string_val';
$autoload = true;
$extra_arg = 10;
var_dump( interface_exists($classname, $autoload, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function interface_exists(): 2 at most, 3 provided in %s on line %d
 -- compile-error
