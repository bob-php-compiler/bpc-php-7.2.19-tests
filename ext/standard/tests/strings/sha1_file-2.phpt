--TEST--
Test sha1_file() function with ASCII output and raw binary output. Based on ext/standard/tests/strings/md5_file.phpt
--FILE--
<?php

echo "\n*** Testing for error conditions ***\n";

echo "\n-- More than valid number of arguments ( valid is 2) --\n";
var_dump ( sha1_file("EmptyFile.txt", true, NULL) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function sha1_file(): 2 at most, 3 provided in %s on line %d
 -- compile-error
