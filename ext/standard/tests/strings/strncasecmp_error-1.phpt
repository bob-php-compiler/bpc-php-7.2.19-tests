--TEST--
Test strncasecmp() function : error conditions
--FILE--
<?php
/* Prototype  : int strncasecmp ( string $str1, string $str2, int $len );
 * Description: Binary safe case-insensitive string comparison of the first n characters
 * Source code: Zend/zend_builtin_functions.c
*/

echo "*** Testing strncasecmp() function: error conditions ***\n";

echo "\n-- Testing strncasecmp() function with Zero arguments --";
var_dump( strncasecmp() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strncasecmp(): 3 required, 0 provided in %s on line %d
 -- compile-error
