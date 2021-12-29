--TEST--
Test function posix_setgid() by calling it more than or less than its expected arguments.
--SKIPIF--
<?php
        if(!extension_loaded("posix")) print "skip - POSIX extension not loaded";
?>
Marco Fabbri mrfabbri@gmail.com
Francesco Fullone ff@ideato.it
#PHPTestFest Cesena Italia on 2009-06-20
--FILE--
<?php


echo "*** Test by calling method or function with incorrect numbers of arguments ***\n";

$gid = posix_getgid();
$extra_arg = '123';

var_dump(posix_setgid( $gid, $extra_arg ) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function posix_setgid(): 1 at most, 2 provided in %s on line %d
 -- compile-error
