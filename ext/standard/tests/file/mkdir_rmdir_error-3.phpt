--TEST--
Test mkdir() and rmdir() functions : error conditions
--FILE--
<?php
/*  Prototype: bool mkdir ( string $pathname [, int $mode [, bool $recursive [, resource $context]]] );
    Description: Makes directory

    Prototype: bool rmdir ( string $dirname [, resource $context] );
    Description: Removes directory
*/

echo "*** Testing mkdir(): error conditions ***\n";
var_dump( mkdir("testdir", 0777, false, $context, "test") );  // args > expected

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mkdir(): 4 at most, 5 provided in %s on line %d
 -- compile-error
