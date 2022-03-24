--TEST--
Test session_get_cookie_params() function : error functionality
--FILE--
<?php

session_get_cookie_params(1);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function session_get_cookie_params(): 0 at most, 1 provided in %s on line %d
 -- compile-error
