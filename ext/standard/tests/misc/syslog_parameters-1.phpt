--TEST--
Syslog parameter parsing test
--FILE--
<?php
openlog();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function openlog(): 3 required, 0 provided in %s on line %d
 -- compile-error
