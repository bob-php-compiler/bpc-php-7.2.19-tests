--TEST--
SPL: RegexIterator::setFlags() exceptions test
--CREDITS--
Lance Kesson jac_kesson@hotmail.com
#testfest London 2009-05-09
--FILE--
<?php

class myIterator implements Iterator {

function current (){}
function key ( ){}
function next ( ){}
function rewind ( ){}
function valid ( ){}


}

class TestRegexIterator extends RegexIterator{}

$rege = '/^a/';


$r = new TestRegexIterator(new myIterator, $rege);

try{
	$r->setFlags();
}catch (Exception $e) {
	echo $e->getMessage();
}

?>
--EXPECTF--
Fatal error: Uncaught ArgumentCountError: Too few arguments to method RegexIterator::setFlags(): 1 required, 0 provided in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
