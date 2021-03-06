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

// Zero arguments
echo "\n-- Testing dir() function with zero arguments --";
var_dump( dir() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function dir(): 1 required, 0 provided in %s on line %d
 -- compile-error
