--TEST--
Test function posix_setuid() by calling it more than or less than its expected arguments
--SKIPIF--
<?php
        if(!extension_loaded("posix")) print "skip - POSIX extension not loaded";
?>
--CREDITS--
Marco Fabbri mrfabbri@gmail.com
Francesco Fullone ff@ideato.it
#PHPTestFest Cesena Italia on 2009-06-20
--FILE--
<?php


echo "*** Test by calling method or function with incorrect numbers of arguments ***\n";

$uid = '123';


$extra_arg = '12312';

var_dump(posix_setuid( $uid, $extra_arg ) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function posix_setuid(): 1 at most, 2 provided in %s on line %d
 -- compile-error
