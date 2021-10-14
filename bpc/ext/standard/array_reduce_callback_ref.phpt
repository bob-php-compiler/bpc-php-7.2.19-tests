--TEST--
array_map callback with reference argument
--FILE--
<?php

function test($reduce, &$value)
{
    $value *= 2;
    return $reduce + $value;
}

$v = 1;
$arr = array(&$v, 2, 3);
$result = array_reduce($arr, 'test');
var_dump($result);
var_dump($arr);

function test2($reduce, &$value)
{
    $value[] = 'v';
    return $reduce + 1;
}

$a1 = array(1);
$arr = array(
    &$a1,
    array(2),
    array(3),
);
$result = array_reduce($arr, 'test2');
var_dump($result);
var_dump($arr);

?>
--EXPECT--
int(12)
array(3) {
  [0]=>
  &int(2)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
int(3)
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
