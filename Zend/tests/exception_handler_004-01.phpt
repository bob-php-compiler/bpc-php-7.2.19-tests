--TEST--
exception handler tests - 4
--FILE--
<?php

set_exception_handler();

echo "Done\n";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function set_exception_handler(): 1 required, 0 provided in %s on line %d
 -- compile-error
