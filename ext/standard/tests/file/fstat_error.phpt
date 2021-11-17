--TEST--
Test function fstat() by calling it more than or less than its expected arguments
--FILE--
<?php
$fp = fopen ('/proc/self/comm', 'r');
$extra_arg = 'nothing';

var_dump(fstat( $fp, $extra_arg ) );

fclose($fp);

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function fstat(): 1 at most, 2 provided in %s on line %d
 -- compile-error
