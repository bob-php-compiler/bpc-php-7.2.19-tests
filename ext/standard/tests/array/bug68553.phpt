--TEST--
Bug #68553 (array_column: null values in $index_key become incrementing keys in result)
--FILE--
<?php
$i = 100;
/* increase the resource id to make test stable */
while ($i--) {
	$fd = fopen('/proc/self/comm', "r");
	fclose($fd);
}
$a = array(
	array('a' => 10),
	array('a' => 20),
	array('a' => true),
	array('a' => false),
	array('a' => fopen('/proc/self/comm', "r")),
	array('a' => -5),
	array('a' => 7.38),
	array('a' => null, "test"),
	array('a' => null),
);

var_dump(array_column($a, null, 'a'));
--EXPECTF--
array(8) {
  [10]=>
  array(1) {
    ["a"]=>
    int(10)
  }
  [20]=>
  array(1) {
    ["a"]=>
    int(20)
  }
  [1]=>
  array(1) {
    ["a"]=>
    bool(true)
  }
  [0]=>
  array(1) {
    ["a"]=>
    bool(false)
  }
  [%d]=>
  array(1) {
    ["a"]=>
    resource(%d) of type (stream)
  }
  [-5]=>
  array(1) {
    ["a"]=>
    int(-5)
  }
  [7]=>
  array(1) {
    ["a"]=>
    float(7.38)
  }
  [""]=>
  array(1) {
    ["a"]=>
    NULL
  }
}
