--TEST--
Static Variable Expressions
--FILE--
<?php
define('bar', 2);
define('baz', bar + 1);

function foo() {
	static $a = 1 + 1;
	static $b = array(bar => 1 + 1, baz * 2 => 1 << 2);
	static $c = array(1 => bar, 3 => baz);
	var_dump($a, $b, $c);
}

foo();
?>
--EXPECT--
int(2)
array(2) {
  [2]=>
  int(2)
  [6]=>
  int(4)
}
array(2) {
  [1]=>
  int(2)
  [3]=>
  int(3)
}
