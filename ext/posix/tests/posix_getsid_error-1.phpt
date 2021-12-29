--TEST--
Test posix_getsid() function : error conditions
--DESCRIPTION--
cases: no params, wrong param, wrong param range
--CREDITS--
Moritz Neuhaeuser, info@xcompile.net
PHP Testfest Berlin 2009-05-10
--SKIPIF--
<?php
	if(!extension_loaded("posix")) {
        die("SKIP - POSIX extension not loaded");
    }
?>
--FILE--
<?php
var_dump( posix_getsid() );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function posix_getsid(): 1 required, 0 provided in %s on line %d
 -- compile-error
