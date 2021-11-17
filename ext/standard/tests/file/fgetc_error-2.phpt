--TEST--
Test fgetc() function : error conditions
--FILE--
<?php
/*
 Prototype: string fgetc ( resource $handle );
 Description: Gets character from file pointer
*/

echo "*** Testing error conditions ***\n";

// more than expected no. of args
echo "-- Testing fgetc() with more than expected number of arguments --\n";
$fp = fopen('/proc/self/comm', "r");
var_dump( fgetc($fp, $fp) );
fclose($fp);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function fgetc(): 1 at most, 2 provided in %s on line %d
 -- compile-error
