--TEST--
Test dir() function : error conditions
--FILE--
<?php
/*
 * Prototype  : object dir(string $directory[, resource $context])
 * Description: Directory class with properties, handle and class and methods read, rewind and close
 * Source code: ext/standard/dir.c
 */

echo "*** Testing dir() : error conditions ***\n";

// With one more than expected number of arguments
echo "\n-- Testing dir() function with one more than expected number of arguments --";
$extra_arg = 10;
var_dump( dir(getcwd(), "stream", $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function dir(): 2 at most, 3 provided in %s on line %d
 -- compile-error
