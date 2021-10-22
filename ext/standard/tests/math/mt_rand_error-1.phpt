--TEST--
Test mt_rand() - wrong params test mt_rand()
--FILE--
<?php
mt_rand(10,100,false);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mt_rand(): 2 at most, 3 provided in %s on line 2
 -- compile-error
