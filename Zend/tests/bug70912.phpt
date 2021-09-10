--TEST--
Bug #70912 (Null ptr dereference when class property is initialised to a dereferenced value)
--FILE--
<?php
class A {
	public $a=array()[];
}
?>
--EXPECTF--
Parse error: %s in %s on line %d
