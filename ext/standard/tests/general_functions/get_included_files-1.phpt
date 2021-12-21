--TEST--
Test get_include_files() function
--FILE--
<?php

echo "\n-- Error cases --\n";
var_dump(get_included_files(true));

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function get_included_files(): 0 at most, 1 provided in %s on line %d
 -- compile-error
