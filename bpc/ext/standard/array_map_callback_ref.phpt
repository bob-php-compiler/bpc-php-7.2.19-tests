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

function test2(&$value)
{
    $value[] = 'v';
    return $value;
}

$a1 = array(1);
$arr = array(
    &$a1,
    array(2),
    array(3),
);
$result = array_map('test2', $arr);
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
array(3) {
  [0]=>
  array(2) {
    [0]=>
    int(1)
    [1]=>
    string(1) "v"
  }
  [1]=>
  array(2) {
    [0]=>
    int(2)
    [1]=>
    string(1) "v"
  }
  [2]=>
  array(2) {
    [0]=>
    int(3)
    [1]=>
    string(1) "v"
  }
}
array(3) {
  [0]=>
  &array(2) {
    [0]=>
    int(1)
    [1]=>
    string(1) "v"
  }
  [1]=>
  array(1) {
    [0]=>
    int(2)
  }
  [2]=>
  array(1) {
    [0]=>
    int(3)
  }
}
