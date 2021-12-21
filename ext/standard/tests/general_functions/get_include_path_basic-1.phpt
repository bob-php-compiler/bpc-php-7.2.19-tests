--TEST--
Test get_include_path() function
--FILE--
<?php

echo "\nError cases:\n";
var_dump(get_include_path(TRUE));

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function get_include_path(): 0 at most, 1 provided in %s on line %d
 -- compile-error
