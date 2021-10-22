--TEST--
Test fmod() - wrong params test fmod()
--INI--
precision=14
--FILE--
<?php
fmod(23,2,true);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function fmod(): 2 at most, 3 provided in %s on line 2
 -- compile-error
