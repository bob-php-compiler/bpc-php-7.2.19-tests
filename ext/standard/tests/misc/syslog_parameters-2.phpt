--TEST--
Syslog parameter parsing test
--FILE--
<?php
syslog();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function syslog(): 2 required, 0 provided in %s on line %d
 -- compile-error
