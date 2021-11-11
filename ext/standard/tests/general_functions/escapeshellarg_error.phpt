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


echo "\n-- Testing escapeshellarg() function with a object supplied for argument --\n";

class classA
{
}

$arg = new classA();
var_dump( escapeshellarg($arg));

echo "\n-- Testing escapeshellarg() function with a resource supplied for argument --\n";
$fp = fopen('/proc/self/comm', "r");
var_dump( escapeshellarg($fp));
fclose($fp);

echo "\n-- Testing escapeshellarg() function with a array supplied for argument --\n";
$arg = array(1,2,3);
var_dump( escapeshellarg($arg));

?>
===Done===
--EXPECTF--
*** Testing escapeshellarg() : error conditions ***

-- Testing escapeshellarg() function with a object supplied for argument --

Warning: escapeshellarg() expects parameter 1 to be string, object given in %s on line %d
NULL

-- Testing escapeshellarg() function with a resource supplied for argument --

Warning: escapeshellarg() expects parameter 1 to be string, resource given in %s on line %d
NULL

-- Testing escapeshellarg() function with a array supplied for argument --

Warning: escapeshellarg() expects parameter 1 to be string, array given in %s on line %d
NULL
===Done===
