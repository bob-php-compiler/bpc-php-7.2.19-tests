--TEST--
Test rewinddir() function : error conditions - incorrect number of args
--FILE--
<?php
/* Prototype  : void rewinddir([resource $dir_handle])
 * Description: Rewind dir_handle back to the start
 * Source code: ext/standard/dir.c
 * Alias to functions: rewind
 */

/*
 * Pass incorrect number of arguments to rewinddir() to test behaviour
 */

echo "*** Testing rewinddir() : error conditions ***\n";


//Test rewinddir with one more than the expected number of arguments
echo "\n-- Testing rewinddir() function with more than expected no. of arguments --\n";

$dir_path = dirname(__FILE__) . "/rewinddir_error";
mkdir($dir_path);
$dir_handle = opendir($dir_path);
$extra_arg = 10;

var_dump( rewinddir($dir_handle, $extra_arg) );
closedir($dir_handle);
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function rewinddir(): 1 at most, 2 provided in %s on line %d
 -- compile-error
