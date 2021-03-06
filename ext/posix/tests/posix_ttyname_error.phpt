--TEST--
Test function posix_ttyname() by calling it more than or less than its expected arguments
--CREDITS--
Marco Fabbri mrfabbri@gmail.com
Francesco Fullone ff@ideato.it
#PHPTestFest Cesena Italia on 2009-06-20
--SKIPIF--
<?php
if (!extension_loaded('posix')) {
    die('SKIP The posix extension is not loaded.');
}
?>
--FILE--
<?php


echo "*** Test by calling method or function with incorrect numbers of arguments ***\n";

$fd = 'foo';
$extra_arg = 'bar';

var_dump(posix_ttyname( $fd, $extra_arg ) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function posix_ttyname(): 1 at most, 2 provided in %s on line %d
 -- compile-error
