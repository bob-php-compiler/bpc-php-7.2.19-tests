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
var_dump( mkdir() );  // args < expected

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mkdir(): 1 required, 0 provided in %s on line %d
 -- compile-error
