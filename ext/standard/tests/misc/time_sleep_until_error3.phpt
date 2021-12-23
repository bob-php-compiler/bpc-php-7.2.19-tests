--TEST--
time_sleep_until() function - error test for time_sleep_until()
--SKIPIF--
<?php	if (!function_exists("time_sleep_until")) die('skip time_sleep_until() not available');?>
--CREDITS--
Francesco Fullone ff@ideato.it
#PHPTestFest Cesena Italia on 2009-06-20
--FILE--
<?php
  var_dump(time_sleep_until());
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function time_sleep_until(): 1 required, 0 provided in %s on line %d
 -- compile-error
