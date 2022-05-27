--TEST--
filter_list()
--FILE--
<?php

var_dump(filter_list(array()));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function filter_list(): 0 at most, 1 provided in %s on line %d
 -- compile-error
