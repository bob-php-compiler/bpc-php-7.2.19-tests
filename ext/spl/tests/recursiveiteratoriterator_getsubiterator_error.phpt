--TEST--
SPL: RecursiveIteratorIterator::getSubIterator() expects at most 1 parameter
--CREDITS--
Matt Raines matt@raines.me.uk
#testfest London 2009-05-09
--FILE--
<?php
$iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator(array()));
$iterator->getSubIterator();
$iterator->getSubIterator(0);
$iterator->getSubIterator(0, 0);
?>
--EXPECTF--
Warning: Too many arguments to method RecursiveIteratorIterator::getSubIterator(): 1 at most, 2 provided in %s on line %d
