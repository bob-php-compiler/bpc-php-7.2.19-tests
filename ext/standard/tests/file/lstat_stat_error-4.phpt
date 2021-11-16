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

echo "\n*** Testing stat() for error conditions ***\n";
var_dump( stat(__FILE__, 2) );  // file, args > expected

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function stat(): 1 at most, 2 provided in %s on line %d
 -- compile-error
