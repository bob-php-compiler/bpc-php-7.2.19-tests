--TEST--
Test session_destroy() function : error functionality
--FILE--
<?php

session_destroy(1);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function session_destroy(): 0 at most, 1 provided in %s on line %d
 -- compile-error
