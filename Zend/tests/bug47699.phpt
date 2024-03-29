--TEST--
Bug #47699 (autoload and late static binding)
--FILE--
<?php
class A {
	static function test($v='') {
		print_r(get_called_class());
	}
}
class B extends A {
}
B::test();
spl_autoload_register(array('B', 'test'));
$classname = 'X';
new $classname();
?>
--EXPECTF--
BB
Fatal error: Uncaught Error: Class 'X' not found in %sbug47699.php:%d
Stack trace:
#0 {main}
  thrown in %sbug47699.php on line %d
