--TEST--
Test posix_ttyname() with wrong parameters
--DESCRIPTION--
Gets the absolute path to the current terminal device that is open on a given file descriptor.
Source code: ext/posix/posix.c
--CREDITS--
Falko Menge, mail at falko-menge dot de
PHP Testfest Berlin 2009-05-10
--FILE--
<?php
    var_dump(posix_ttyname()); // param missing
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function posix_ttyname(): 1 required, 0 provided in %s on line %d
 -- compile-error
