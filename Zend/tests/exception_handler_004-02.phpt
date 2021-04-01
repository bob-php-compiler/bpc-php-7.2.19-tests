--TEST--
exception handler tests - 4
--FILE--
<?php

set_exception_handler("foo", "bar");

echo "Done\n";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function set_exception_handler(): 1 at most, 2 provided in %s on line %d
 -- compile-error
