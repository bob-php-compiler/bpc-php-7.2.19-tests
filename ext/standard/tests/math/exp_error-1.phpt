--TEST--
Test exp() - wrong params for exp()
--INI--
precision=14
--FILE--
<?php
exp(23,true);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function exp(): 1 at most, 2 provided in %s on line %d
 -- compile-error
