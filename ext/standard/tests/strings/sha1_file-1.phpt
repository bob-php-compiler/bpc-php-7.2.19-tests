--TEST--
Test sha1_file() function with ASCII output and raw binary output. Based on ext/standard/tests/strings/md5_file.phpt
--FILE--
<?php

echo "\n*** Testing for error conditions ***\n";

echo "\n-- Zero arguments --\n";
var_dump ( sha1_file() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function sha1_file(): 1 required, 0 provided in %s on line %d
 -- compile-error
