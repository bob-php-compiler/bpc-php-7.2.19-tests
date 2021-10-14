--TEST--
array_walk callback with reference argument
--FILE--
<?php

function test (&$v, &$k, &$arg) {
    echo "v=$v, k=$k, arg=$arg\n";
    $v .= $v;
    $k .= $k;
    $arg += 1;
}

$arr = array('a' => 'A', 'b' => 'B', 'c' => 'C');
$user_data = 1;
var_dump(array_walk($arr, 'test', $user_data));
var_dump($arr, $user_data);

$arr = array('a' => 'A', 'b' => 'B', 'c' => 'C');
$user_data = array();
function test2 (&$v, &$k, &$arg) {
    echo "v=$v, k=$k, arg=";
    var_dump($arg);
    $v .= $v;
    $k .= $k;
    $arg[] = $v;
}
var_dump(array_walk($arr, 'test2', $user_data));
var_dump($arr, $user_data);

$arr = array('a' => 'A', 'b' => 'B', 'c' => 'C');
$user_data = array();
function test3 (&$v, &$k, $arg) {
    echo "v=$v, k=$k, arg=";
    var_dump($arg);
    $v .= $v;
    $k .= $k;
    $arg[] = $v;
}
var_dump(array_walk($arr, 'test3', $user_data));
var_dump($arr, $user_data);

?>
--EXPECTF--
v=A, k=a, arg=1
v=B, k=b, arg=2
v=C, k=c, arg=3
bool(true)
array(3) {
  ["a"]=>
  string(2) "AA"
  ["b"]=>
  string(2) "BB"
  ["c"]=>
  string(2) "CC"
}
int(1)
v=A, k=a, arg=array(0) {
}
v=B, k=b, arg=array(1) {
  [0]=>
  string(2) "AA"
}
v=C, k=c, arg=array(2) {
  [0]=>
  string(2) "AA"
  [1]=>
  string(2) "BB"
}
bool(true)
array(3) {
  ["a"]=>
  string(2) "AA"
  ["b"]=>
  string(2) "BB"
  ["c"]=>
  string(2) "CC"
}
array(0) {
}
v=A, k=a, arg=array(0) {
}
v=B, k=b, arg=array(0) {
}
v=C, k=c, arg=array(0) {
}
bool(true)
array(3) {
  ["a"]=>
  string(2) "AA"
  ["b"]=>
  string(2) "BB"
  ["c"]=>
  string(2) "CC"
}
array(0) {
}
