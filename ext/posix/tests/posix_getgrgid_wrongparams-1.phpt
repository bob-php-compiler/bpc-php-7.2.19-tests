--TEST--
Test parameters on posix_getgrgid().
--CREDITS--
Till Klampaeckel, till@php.net
TestFest Berlin 2009
--SKIPIF--
<?php
if (!extension_loaded('posix')) {
    die('SKIP The posix extension is not loaded.');
}
if (strtolower(PHP_OS) == 'darwin') {
    die('SKIP This test doesn\'t run on MacOSX/Darwin.');
}
--FILE--
<?php
var_dump(posix_getgrgid());
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function posix_getgrgid(): 1 required, 0 provided in %s on line %d
 -- compile-error
