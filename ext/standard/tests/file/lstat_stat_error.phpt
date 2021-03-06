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
$file_path = dirname(__FILE__);
var_dump( lstat("$file_path/temp.tmp") ); // non existing file
var_dump( lstat(22) ); // scalar argument
$arr = array(__FILE__);
var_dump( lstat($arr) ); // array argument

echo "\n*** Testing stat() for error conditions ***\n";

var_dump( stat("$file_path/temp.tmp") ); // non existing file
var_dump( stat("$file_path/temp/") ); // non existing dir
var_dump( stat(22) ); // scalar argument
var_dump( stat($arr) ); // array argument

echo "Done\n";
?>
--EXPECTF--
*** Testing lstat() for error conditions ***

Warning: lstat(): Lstat failed for %s in %s on line %d
bool(false)

Warning: lstat(): Lstat failed for 22 in %s on line %d
bool(false)

Warning: lstat() expects parameter 1 to be a valid path, array given in %s on line %d
NULL

*** Testing stat() for error conditions ***

Warning: stat(): stat failed for %s in %s on line %d
bool(false)

Warning: stat(): stat failed for %s in %s on line %d
bool(false)

Warning: stat(): stat failed for 22 in %s on line %d
bool(false)

Warning: stat() expects parameter 1 to be a valid path, array given in %s on line %d
NULL
Done
