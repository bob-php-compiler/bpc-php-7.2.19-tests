--TEST--
SPL: SplCachingIterator, Test method to set flags for caching iterator
--CREDITS--
Chris Scott chris.scott@nstein.com
#testfest London 2009-05-09
--FILE--
<?php

$ai = new ArrayIterator(array('foo', 'bar'));

$ci = new CachingIterator($ai);
$ci->setFlags(); //expects arg

?>
--EXPECTF--
Fatal error: Uncaught ArgumentCountError: Too few arguments to method CachingIterator::setFlags(): 1 required, 0 provided in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
