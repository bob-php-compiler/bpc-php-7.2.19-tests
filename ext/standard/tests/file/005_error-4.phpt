--TEST--
Test fileatime(), filemtime(), filectime() & touch() functions : error conditions
--FILE--
<?php

var_dump( fileatime() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function fileatime(): 1 required, 0 provided in %s on line %d
 -- compile-error
