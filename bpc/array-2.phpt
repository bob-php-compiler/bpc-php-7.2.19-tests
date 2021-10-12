--TEST--
array tests
--FILE--
<?php

$v = 1;
$a = array(&$v);
$b = array(1 => 'b');
$c = $b + $a;
var_dump($c);
$v = 'v';
var_dump($c);
$a[0] = 'AAA';
var_dump($c);
var_dump($a, $v);

?>
--EXPECTF--
array(2) {
  [1]=>
  string(1) "b"
  [0]=>
  &int(1)
}
array(2) {
  [1]=>
  string(1) "b"
  [0]=>
  &string(1) "v"
}
array(2) {
  [1]=>
  string(1) "b"
  [0]=>
  &string(3) "AAA"
}
array(1) {
  [0]=>
  &string(3) "AAA"
}
string(3) "AAA"
