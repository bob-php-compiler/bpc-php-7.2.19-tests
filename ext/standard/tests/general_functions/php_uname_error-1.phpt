--TEST--
Test php_uname() function -  error conditions - pass function incorrect arguments
--FILE--
<?php
/* Prototype: string php_uname  ([ string $mode  ] )
 * Description:  Returns information about the operating system PHP is running on
*/

echo "*** Testing php_uname() - error test\n";

echo "\n-- Testing php_uname() function with more than expected no. of arguments --\n";
var_dump( php_uname('a', true) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function php_uname(): 1 at most, 2 provided in %s on line %d
 -- compile-error
