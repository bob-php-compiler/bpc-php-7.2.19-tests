--TEST--
Test getrandmax() - wrong params test getrandmax()
--FILE--
<?php
var_dump($biggest_int = getrandmax(true));
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function getrandmax(): 0 at most, 1 provided in %s on line 2
 -- compile-error
