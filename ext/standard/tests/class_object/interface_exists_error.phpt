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

// Zero arguments
echo "\n-- Testing interface_exists() function with Zero arguments --\n";
var_dump( interface_exists() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function interface_exists(): 1 required, 0 provided in %s on line %d
 -- compile-error
