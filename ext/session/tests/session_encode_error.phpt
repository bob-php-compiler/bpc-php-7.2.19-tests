--TEST--
Test session_encode() function : basic functionality
--FILE--
<?php

session_encode(1);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function session_encode(): 0 at most, 1 provided in %s on line %d
 -- compile-error
