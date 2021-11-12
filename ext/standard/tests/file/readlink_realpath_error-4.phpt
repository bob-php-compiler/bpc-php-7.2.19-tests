--TEST--
Test readlink() and realpath() functions: error conditions
--SKIPIF--
<?php
if (substr(PHP_OS, 0, 3) == 'WIN') {
    die('skip no symlinks on Windows');
}
?>
--FILE--
<?php
/* Prototype: string readlink ( string $path );
   Description: Returns the target of a symbolic link

   Prototype: string realpath ( string $path );
   Description: Returns canonicalized absolute pathname
*/

echo "*** Testing realpath(): error conditions ***\n";
var_dump( realpath(1, 2) );  // args > expected

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function realpath(): 1 at most, 2 provided in %s on line %d
 -- compile-error
