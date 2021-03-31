--TEST--
strftime() and too few arguments
--SKIPIF--
<?php
if (substr(PHP_OS, 0, 3) == 'WIN') die('skip posix only test.');
if (!function_exists('strftime')) die("skip, strftime not available");
?>
--FILE--
<?php
strftime();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strftime(): 1 required, 0 provided in %s on line %d
 -- compile-error
