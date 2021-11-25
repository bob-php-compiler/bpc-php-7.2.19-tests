--TEST--
Test closedir() function : error conditions - Pass incorrect number of arguments
--FILE--
<?php
/* Prototype  : void closedir([resource $dir_handle])
 * Description: Close directory connection identified by the dir_handle
 * Source code: ext/standard/dir.c
 * Alias to functions: close
 */

/*
 * Pass incorrect number of arguments to closedir() to test behaviour
 */

echo "*** Testing closedir() : error conditions ***\n";


//Test closedir with one more than the expected number of arguments
echo "\n-- Testing closedir() function with more than expected no. of arguments --\n";

$dir_path = dirname(__FILE__) . '\closedir_error';
mkdir($dir_path);
$dir_handle = opendir($dir_path);

$extra_arg = 10;
var_dump( closedir($dir_handle, $extra_arg) );

//successfully close the directory handle so can delete in CLEAN section
closedir($dir_handle);
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function closedir(): 1 at most, 2 provided in %s on line %d
 -- compile-error
