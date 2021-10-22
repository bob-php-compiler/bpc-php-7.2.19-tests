--TEST--
Test  rand() - wrong params test rand()
--FILE--
<?php
rand(10,100,false);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function rand(): 2 at most, 3 provided in %s on line 2
 -- compile-error
