--TEST--
Bug #75420.5 (Indirect modification of magic method argument)
--FILE--
<?php
class Test {
	public function __isset($x) { $GLOBALS["obj"] = 24; return true; }
	public function __get($x) { var_dump($this); return 42; }
}

$obj = new Test;
$name = "foo";
var_dump(isset($obj->$name) ? $obj->$name : 12);
var_dump($obj);
?>
--EXPECTF--
Notice: Trying to get property 'foo' of non-object in %sbug75420.5.php on line 9
NULL
int(24)
