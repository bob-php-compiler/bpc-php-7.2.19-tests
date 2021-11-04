--TEST--
Test strncmp() function : error conditions
--FILE--
<?php
/* Prototype  : int strncmp ( string $str1, string $str2, int $len );
 * Description: Binary safe case-sensitive string comparison of the first n characters
 * Source code: Zend/zend_builtin_functions.c
*/

/* Test strncmp() function with more/less number of args and invalid args */

echo "*** Testing strncmp() function: error conditions ***\n";
$str1 = 'string_val';
$str2 = 'string_val';
$len = 10;
$extra_arg = 10;

var_dump( strncmp($str1, $str2, $len, $extra_arg) );  //Four arguments, greater than expected no. of args

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function strncmp(): 3 at most, 4 provided in %s on line %d
 -- compile-error
