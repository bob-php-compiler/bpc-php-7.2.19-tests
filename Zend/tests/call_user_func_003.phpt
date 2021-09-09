--TEST--
Testing call_user_func() with closures
--FILE--
<?php

$foo = function() {
	static $instance;

	if (is_null($instance)) {
		$instance = function () {
			return 'OK!';
		};
	}

	return $instance;
};

var_dump(call_user_func(array($foo, '__invoke'))->__invoke());
var_dump(call_user_func(function() { global $foo; return $foo; }, '__invoke'));

?>
--EXPECTF--
string(3) "OK!"

Warning: Too many arguments to function {closure}(): 0 at most, 1 provided %s on line %d
object(Closure)#%d (0) {
}
