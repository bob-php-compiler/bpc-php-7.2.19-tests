--TEST--
get_object_vars() fast/slow-path discrepancies
--SKIPIF--
<?php if (!extension_loaded("json")) print "skip"; ?>
--FILE--
<?php

$obj = (object)[
    "\0A\0b" => 42,
    "\0*\0c" => 24,
    12 => 6,
];
class C implements JsonSerializable {
    public function jsonSerialize() {
        var_dump(get_object_vars($GLOBALS['obj']));
    }
};

$obj->test = new C;

var_dump(get_object_vars($obj));

// Use json_encode to get a dump with apply_count > 0
json_encode($obj);

?>
--EXPECT--
array(4) {
  [" A b"]=>
  int(42)
  [" * c"]=>
  int(24)
  [12]=>
  int(6)
  ["test"]=>
  object(C)#2 (0) {
  }
}
array(4) {
  [" A b"]=>
  int(42)
  [" * c"]=>
  int(24)
  [12]=>
  int(6)
  ["test"]=>
  object(C)#2 (0) {
  }
}
