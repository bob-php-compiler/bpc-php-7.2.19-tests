--TEST--
Test fileatime(), filemtime(), filectime() & touch() functions : error conditions
--FILE--
<?php

var_dump( filemtime() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function filemtime(): 1 required, 0 provided in %s on line %d
 -- compile-error
