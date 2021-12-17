--TEST--
Syslog parameter parsing test
--FILE--
<?php
closelog('Doesnt take any parameters');
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function closelog(): 0 at most, 1 provided in %s on line %d
 -- compile-error
