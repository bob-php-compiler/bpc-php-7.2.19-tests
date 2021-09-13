--TEST--
Constant expressions with arrays
--FILE--
<?php
define('a', array(1,2,array(3,array(4))));
define('b', a[0]);
define('c', a[2][0]);
define('d', a[2]);
define('e', array("string" => array(1))["string"][0]);

var_dump(b, c, e);

class foo {
	const bar = array(1)[0];
}

var_dump(foo::bar);

var_dump(a, a[0], a[2], a[2][1], a[3]);

?>
--EXPECTF--
int(1)
int(3)
int(1)
int(1)

Notice: Undefined offset: 3 in %s on line %d
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  array(2) {
    [0]=>
    int(3)
    [1]=>
    array(1) {
      [0]=>
      int(4)
    }
  }
}
int(1)
array(2) {
  [0]=>
  int(3)
  [1]=>
  array(1) {
    [0]=>
    int(4)
  }
}
array(1) {
  [0]=>
  int(4)
}
NULL
