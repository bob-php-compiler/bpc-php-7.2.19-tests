--TEST--
Test function posix_errno() by calling it with its expected arguments
--SKIPIF--
<?php
        if(!extension_loaded("posix")) print "skip - POSIX extension not loaded";
?>
--CREDITS--
Morten Amundsen mor10am@gmail.com
Francesco Fullone ff@ideato.it
#PHPTestFest Cesena Italia on 2009-06-20
--FILE--
<?php

echo "*** Test by calling method or function with more than expected arguments ***\n";

// test without any error
var_dump(posix_errno('bar'));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function posix_errno(): 0 at most, 1 provided in %s on line %d
 -- compile-error
