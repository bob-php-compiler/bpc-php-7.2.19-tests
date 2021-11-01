--TEST--
Test md5_file() function with ASCII output and raw binary output
--FILE--
<?php

echo "\n*** Testing for error conditions ***\n";

/* Zero arguments */
 var_dump ( md5_file() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function md5_file(): 1 required, 0 provided in %s on line %d
 -- compile-error
