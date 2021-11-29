--TEST--
Test fileatime(), filemtime(), filectime() & touch() functions : error conditions
--FILE--
<?php

var_dump( filectime(__FILE__, TRUE) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function filectime(): 1 at most, 2 provided in %s on line %d
 -- compile-error
