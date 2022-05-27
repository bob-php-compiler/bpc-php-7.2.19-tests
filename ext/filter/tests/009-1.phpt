--TEST--
filter_id()
--FILE--
<?php

var_dump(filter_id(0,0,0));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function filter_id(): 1 at most, 3 provided in %s on line %d
 -- compile-error
