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
    var_dump(posix_ttyname(0)); // param not a ressource
    var_dump(posix_ttyname(imagecreate(1, 1))); // wrong resource type
?>
===DONE===
--EXPECTF--
bool(false)

Warning: posix_ttyname(): supplied resource is not a valid stream resource in %s on line %s

Warning: posix_ttyname(): expects argument 1 to be a valid stream resource in %s on line %d
bool(false)
===DONE===
