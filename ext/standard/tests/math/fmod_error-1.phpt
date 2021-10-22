--TEST--
Test fmod() - wrong params test fmod()
--INI--
precision=14
--FILE--
<?php
fmod(23);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function fmod(): 2 required, 1 provided in %s on line 2
 -- compile-error
