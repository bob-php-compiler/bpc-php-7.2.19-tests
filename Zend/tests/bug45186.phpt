--TEST--
Bug #45186 (__call depends on __callstatic in class scope)
--FILE--
<?php

class bar  {
	public function __call($a, $b) {
		print "__call:\n";
		var_dump($a);
	}
	static public function __callstatic($a, $b) {
		print "__callstatic:\n";
		var_dump($a);
	}
	public function test() {
		self::ABC();
		bar::ABC();
		call_user_func(array('BAR', 'xyz'));
		call_user_func(array('BAR', 'www'));
		call_user_func(array('self', 'y'));
		call_user_func(array('self', 'y'));
	}
	static function x() {
		print "ok\n";
	}
}

$x = new bar;

$x->test();

call_user_func(array('BAR','x'));
call_user_func(array('BAR', 'www'));
call_user_func(array('self', 'y'));

?>
--EXPECTF--
__call:
string(3) "ABC"
__call:
string(3) "ABC"
__call:
string(3) "xyz"
__call:
string(3) "www"
__call:
string(1) "y"
__call:
string(1) "y"
ok
__callstatic:
string(3) "www"

Warning: call_user_func() expects parameter 1 to be callable, self::y given in %sbug45186.php on line 31
