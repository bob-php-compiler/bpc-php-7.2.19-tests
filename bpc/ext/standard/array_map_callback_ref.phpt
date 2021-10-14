--TEST--
array_map callback with reference argument
--FILE--
<?php

function test(&$value)
{
    $value *= 2;
    return $value;
}

$v = 1;
$arr = array(&$v, 2, 3);
$result = array_map('test', $arr);
var_dump($result);
var_dump($arr);


?>
--EXPECT--
array(3) {
  [0]=>
  int(2)
  [1]=>
  int(4)
  [2]=>
  int(6)
}
array(3) {
  [0]=>
  &int(2)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
