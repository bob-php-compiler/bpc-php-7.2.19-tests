--TEST--
Test strncasecmp() function : error conditions
--FILE--
<?php
/* Prototype  : int strncasecmp ( string $str1, string $str2, int $len );
 * Description: Binary safe case-insensitive string comparison of the first n characters
 * Source code: Zend/zend_builtin_functions.c
*/

echo "*** Testing strncasecmp() function: error conditions ***\n";
$str1 = 'string_val';

echo "\n-- Testing strncasecmp() function with less than expected number of arguments --";
var_dump( strncasecmp($str1) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strncasecmp(): 3 required, 1 provided in %s on line %d
 -- compile-error
