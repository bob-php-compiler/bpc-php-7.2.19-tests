--TEST--
Test fgets() function : error conditions
--FILE--
<?php
/*
 Prototype: string fgets ( resource $handle [, int $length] );
 Description: Gets line from file pointer
*/

echo "*** Testing error conditions ***\n";

// more than expected no. of args
echo "-- Testing fgets() with more than expected number of arguments --\n";
$fp = fopen('/proc/self/comm', "r");
var_dump( fgets($fp, 10, $fp) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function fgets(): 2 at most, 3 provided in %s on line %d
 -- compile-error
