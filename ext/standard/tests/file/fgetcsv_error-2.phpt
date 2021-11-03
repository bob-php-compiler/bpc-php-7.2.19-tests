--TEST--
Test fgetcsv() function : error conditions
--FILE--
<?php
/*
 Prototype: array fgetcsv ( resource $handle [, int $length [, string $delimiter [, string $enclosure [, string $escape]]]] );
 Description: Gets line from file pointer and parse for CSV fields
*/

echo "*** Testing error conditions ***\n";

// more than expected no. of args
echo "-- Testing fgetcsv() with more than expected number of arguments --\n";
$fp = fopen('/proc/self/comm', "r");
$len = 1024;
$delim = ";";
$enclosure ="\"";
$escape = '"';
var_dump( fgetcsv($fp, $len, $delim, $enclosure, $escape, $fp) );
fclose($fp);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function fgetcsv(): 5 at most, 6 provided in %s on line %d
 -- compile-error
