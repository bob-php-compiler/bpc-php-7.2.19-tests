--TEST--
Test escapeshellarg() function : error conditions -  wrong numbers of parameters
--FILE--
<?php

/* Prototype  : string escapeshellarg  ( string $arg  )
 * Description:  Escape a string to be used as a shell argument.
 * Source code: ext/standard/exec.c
 */

/*
 * Pass an incorrect number of arguments to escapeshellarg() to test behaviour
 */

echo "*** Testing escapeshellarg() : error conditions ***\n";


echo "\n-- Testing escapeshellarg() function with more than expected no. of arguments --\n";
$arg = "Mr O'Neil";
$extra_arg = 10;
var_dump( escapeshellarg($arg, $extra_arg) );

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function escapeshellarg(): 1 at most, 2 provided in %s on line %d
 -- compile-error
