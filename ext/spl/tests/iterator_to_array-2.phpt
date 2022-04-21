--TEST--
SPL: iterator_to_array() exceptions test
--CREDITS--
Lance Kesson jac_kesson@hotmail.com
#testfest London 2009-05-09
--FILE--
<?php
$array=array('a','b');

$iterator = new ArrayIterator($array);

iterator_to_array($iterator,'test','test');

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function iterator_to_array(): 2 at most, 3 provided in %s on line %d
 -- compile-error
