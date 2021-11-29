--TEST--
Test fileatime(), filemtime(), filectime() & touch() functions : error conditions
--FILE--
<?php

var_dump( fileatime(__FILE__, "string") );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function fileatime(): 1 at most, 2 provided in %s on line %d
 -- compile-error
