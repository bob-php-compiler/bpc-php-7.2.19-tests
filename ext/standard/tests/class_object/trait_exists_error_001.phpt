--TEST--
Test trait_exists() function : error conditions (wrong number of arguments)
--FILE--
<?php
/* Prototype  : proto bool trait_exists(string traitname [, bool autoload])
 * Description: Checks if the trait exists
 * Source code: Zend/zend_builtin_functions.c
 * Alias to functions:
 */

/**
 * Test wrong number of arguments
 */

echo "*** Testing trait_exists() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing trait_exists() function with Zero arguments --\n";
var_dump( trait_exists() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function trait_exists(): 1 required, 0 provided in %s on line %d
 -- compile-error
