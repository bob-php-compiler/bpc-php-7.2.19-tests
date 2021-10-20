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

//Test each with one more than the expected number of arguments
echo "\n-- Testing each() function with more than expected no. of arguments --\n";
$arr = array(1, 2);
$extra_arg = 10;
var_dump( each($arr, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function each(): 1 at most, 2 provided in %s on line %d
 -- compile-error
