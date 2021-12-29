--TEST--
Test function posix_geteuid() by calling it more than or less than its expected arguments
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

$extra_args = array( 12312, 2 => '1234', 'string' => 'string' );

var_dump( posix_geteuid( $extra_args ));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function posix_geteuid(): 0 at most, 1 provided in %s on line %d
 -- compile-error
