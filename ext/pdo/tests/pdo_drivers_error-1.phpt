--TEST--
Test that PDO::getAvailableDrivers / pdo_drivers does not accept any parameters
--CREDITS--
Amo Chohan <amo.chohan@gmail.com>
--FILE--
<?php
pdo_drivers('fail');
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function pdo_drivers(): 0 at most, 1 provided in %s on line %d
 -- compile-error
