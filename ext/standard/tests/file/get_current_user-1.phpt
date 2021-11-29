--TEST--
get_current_user() tests
--FILE--
<?php

var_dump(get_current_user("blah"));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function get_current_user(): 0 at most, 1 provided in %s on line %d
 -- compile-error
