--TEST--
Test function key_exists() by calling it more than or less than its expected arguments
--CREDITS--
Francesco Fullone ff@ideato.it
#PHPTestFest Cesena Italia on 2009-06-20
--FILE--
<?php

echo "*** Test by calling method or function with incorrect numbers of arguments ***\n";

var_dump(key_exists());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function key_exists(): 2 required, 0 provided in %s on line %d
 -- compile-error
