--TEST--
Test each() function : error conditions - pass incorrect number of args
--FILE--
<?php
/* Prototype  : array each(array $arr)
 * Description: Return the currently pointed key..value pair in the passed array,
 * and advance the pointer to the next element
 * Source code: Zend/zend_builtin_functions.c
 */

/*
 * Pass an incorrect number of arguments to each() to test behaviour
 */

echo "*** Testing each() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing each() function with Zero arguments --\n";
var_dump( each() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function each(): 1 required, 0 provided in %s on line %d
 -- compile-error
