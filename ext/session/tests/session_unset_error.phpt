--TEST--
Test session_unset() function : error functionality
--FILE--
<?php

session_unset(1);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function session_unset(): 0 at most, 1 provided in %s on line %d
 -- compile-error
