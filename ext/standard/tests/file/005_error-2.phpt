--TEST--
Test fileatime(), filemtime(), filectime() & touch() functions : error conditions
--FILE--
<?php

var_dump( filemtime(__FILE__, 100) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function filemtime(): 1 at most, 2 provided in %s on line %d
 -- compile-error
