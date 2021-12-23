--TEST--
sys_getloadavg() tests
--SKIPIF--
<?php
if (!function_exists("sys_getloadavg")) die("skip");
?>
--FILE--
<?php

var_dump(sys_getloadavg(""));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function sys_getloadavg(): 0 at most, 1 provided in %s on line %d
 -- compile-error
