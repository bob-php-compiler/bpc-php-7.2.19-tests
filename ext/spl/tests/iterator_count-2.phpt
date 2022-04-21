--TEST--
SPL: iterator_count() exceptions test
--CREDITS--
Lance Kesson jac_kesson@hotmail.com
#testfest London 2009-05-09
--FILE--
<?php
$array=array('a','b');

$iterator = new ArrayIterator($array);

iterator_count($iterator,'1');

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function iterator_count(): 1 at most, 2 provided in %s on line %d
 -- compile-error
