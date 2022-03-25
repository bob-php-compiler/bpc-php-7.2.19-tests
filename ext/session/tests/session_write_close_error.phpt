--TEST--
Test session_write_close() function : error functionality
--FILE--
<?php

session_write_close(1);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function session_write_close(): 0 at most, 1 provided in %s on line %d
 -- compile-error
