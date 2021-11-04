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

var_dump( strncmp() );  //Zero argument

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strncmp(): 3 required, 0 provided in %s on line %d
 -- compile-error
