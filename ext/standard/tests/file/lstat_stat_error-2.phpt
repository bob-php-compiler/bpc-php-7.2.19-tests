--TEST--
Test lstat() and stat() functions: error conditions
--SKIPIF--
<?php
if (substr(PHP_OS, 0, 3) == 'WIN') {
    die('skip.. lstat() not available on Windows');
}
?>
--FILE--
<?php
/* Prototype: array lstat ( string $filename );
   Description: Gives information about a file or symbolic link

   Prototype: array stat ( string $filename );
   Description: Gives information about a file
*/

echo "*** Testing lstat() for error conditions ***\n";
var_dump( lstat(__FILE__, 2) );  // args > expected

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function lstat(): 1 at most, 2 provided in %s on line %d
 -- compile-error
