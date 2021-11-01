--TEST--
Test md5_file() function with ASCII output and raw binary output
--FILE--
<?php

echo "\n*** Testing for error conditions ***\n";

/* More than valid number of arguments ( valid is 2)  */
var_dump ( md5_file("EmptyFile.txt", true, NULL) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function md5_file(): 2 at most, 3 provided in %s on line %d
 -- compile-error
