--TEST--
Test parameter validation in posix_mkfifo().
--CREDITS--
Till Klampaeckel, till@php.net
TestFest Berlin 2009
--SKIPIF--
<?php
if (!extension_loaded('posix')) {
    die('SKIP The posix extension is not loaded.');
}
?>
--FILE--
<?php
posix_mkfifo(null);
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function posix_mkfifo(): 2 required, 1 provided in %s on line %d
 -- compile-error
