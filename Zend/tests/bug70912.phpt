--TEST--
Bug #70912 (Null ptr dereference when class property is initialised to a dereferenced value)
--SKIPIF--
skip class constant/property only support simple literal value
--FILE--
<?php
class A {
	public $a=[][];
}
?>
--EXPECTF--
Fatal error: Cannot use [] for reading in %sbug70912.php on line %d
