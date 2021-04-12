--TEST--
Test date_interval_create_from_date_string() function : with 2 parameters (wrong).
--FILE--
<?php
$i = date_interval_create_from_date_string('1 year', 'wrong');
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function date_interval_create_from_date_string(): 1 at most, 2 provided in %s on line %d
 -- compile-error
