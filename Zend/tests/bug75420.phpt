--TEST--
Bug #75420 (Crash when modifing property name in __isset for BP_VAR_IS)
--FILE--
<?php

class Test {
	public function __isset($x) { $GLOBALS["name"] = 24; return true; }
public function __get($x) { var_dump($x); return 42; }
}

$obj = new Test;
$name = "foo";
var_dump(isset($obj->$name) ? $obj->$name : 12);
?>
--EXPECT--
string(2) "24"
int(42)
