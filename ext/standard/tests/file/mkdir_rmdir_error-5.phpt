--TEST--
Test mkdir() and rmdir() functions : error conditions
--FILE--
<?php
/*  Prototype: bool mkdir ( string $pathname [, int $mode [, bool $recursive [, resource $context]]] );
    Description: Makes directory

    Prototype: bool rmdir ( string $dirname [, resource $context] );
    Description: Removes directory
*/

echo "\n*** Testing rmdir(): error conditions ***\n";
var_dump( rmdir(1, 2, 3) );  // args > expected

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function rmdir(): 2 at most, 3 provided in %s on line %d
 -- compile-error
