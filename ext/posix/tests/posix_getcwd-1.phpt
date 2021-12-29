--TEST--
posix_getcwd(): Basic tests
--SKIPIF--
<?php
if (!extension_loaded('posix')) die('skip - POSIX extension not loaded');
if (!function_exists('posix_getcwd')) die('skip posix_getcwd() not found');
?>
--FILE--
<?php

var_dump(posix_getcwd(1));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function posix_getcwd(): 0 at most, 1 provided in %s on line %d
 -- compile-error
