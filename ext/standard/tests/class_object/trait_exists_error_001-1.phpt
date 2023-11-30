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

//Test trait_exists with one more than the expected number of arguments
echo "\n-- Testing trait_exists() function with more than expected no. of arguments --\n";
$traitname = 'string_val';
$autoload = true;
$extra_arg = 10;
var_dump( trait_exists($traitname, $autoload, $extra_arg) );

echo "Done";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function trait_exists(): 2 at most, 3 provided in %s on line %d
 -- compile-error
