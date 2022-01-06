--TEST--
Bug #71835 (json_encode sometimes incorrectly detects recursion with JsonSerializable)
--SKIPIF--
<?php if (!extension_loaded("json")) print "skip"; ?>
--FILE--
<?php
class SomeClass implements JsonSerializable {
	public function jsonSerialize() {
		return array(get_object_vars($this));
	}
}
$class = new SomeClass;
$arr = array($class);
var_dump(json_encode($arr));

class SomeClass2 implements JsonSerializable {
	public function jsonSerialize() {
		return array((array)$this);
	}
}
$class = new SomeClass2;
$arr = array($class);
var_dump(json_encode($arr));
?>
--EXPECT--
string(6) "[[[]]]"
string(6) "[[[]]]"
