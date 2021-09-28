--TEST--
Const class member access with deference
--FILE--
<?php

class A {
    const A = array('a' => array('b' => 'c'));
}

var_dump(A::A);
var_dump(A::A['a']);
var_dump(A::A['a']['b']);

?>
--EXPECT--
array(1) {
  ["a"]=>
  array(1) {
    ["b"]=>
    string(1) "c"
  }
}
array(1) {
  ["b"]=>
  string(1) "c"
}
string(1) "c"
