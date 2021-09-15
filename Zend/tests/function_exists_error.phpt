--TEST--
Test function_exists() function : error conditions
--FILE--
<?php
/*
 * proto bool function_exists(string function_name)
 * Function is implemented in Zend/zend_builtin_functions.c
*/

echo "*** Testing function_exists() : error conditions ***\n";

$arg_0 = "ABC";
$extra_arg = 1;

echo "\nToo many arguments\n";
var_dump(function_exists($arg_0, $extra_arg));

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function function_exists(): 1 at most, 2 provided in %s on line %d
 -- compile-error
