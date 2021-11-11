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


echo "\n-- Testing escapeshellarg() function with no arguments --\n";
var_dump( escapeshellarg() );

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function escapeshellarg(): 1 required, 0 provided in %s on line %d
 -- compile-error
