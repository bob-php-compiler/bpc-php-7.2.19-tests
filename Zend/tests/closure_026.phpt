--TEST--
Closure 026: Assigning a closure object to an array in $this
--FILE--
<?php

class foo {
	public function __construct() {
		$this->a[] = function() {
			return 1;
		};

		var_dump($this);

		var_dump($this->a[0]());
	}
}

$x = new foo;

print "--------------\n";

foreach ($x as $b => $c) {
	var_dump($b, $c);
	var_dump($c[0]());
}

?>
--EXPECTF--
object(foo)#%d (1) {
  ["a"]=>
  array(1) {
    [0]=>
    object(Closure)#%d (0) {
    }
  }
}
int(1)
--------------
string(1) "a"
array(1) {
  [0]=>
  object(Closure)#%d (0) {
  }
}
int(1)
