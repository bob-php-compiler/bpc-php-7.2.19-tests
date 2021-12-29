--TEST--
Test function posix_ctermid() by calling it more than or less than its expected arguments
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

var_dump( posix_ctermid( 'foo' ) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function posix_ctermid(): 0 at most, 1 provided in %s on line %d
 -- compile-error
