--TEST--
Passing Closure as parameter to an non-existent function
--FILE--
<?php

class foo {
	public static function __callstatic($x, $y) {
		var_dump($x,$y);
		return 1;
	}

	public function teste() {
		return foo::x(function ($a,$b=1) { });
	}
}

var_dump(call_user_func(array('foo', 'teste')));

?>
--EXPECTF--
Deprecated: %son-static method foo::teste() should not be called statically in %s on line %d
string(1) "x"
array(1) {
  [0]=>
  object(Closure)#%d (0) {
  }
}
int(1)
