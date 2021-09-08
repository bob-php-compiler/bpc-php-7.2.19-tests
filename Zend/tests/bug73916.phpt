--TEST--
Bug #73916 (zend_print_flat_zval_r doesn't consider reference)
--FILE--
<?php
$a = array('a');
class b{};
$b = new b;
$test[] =& $a;
$test[] =& $b;
test($test);
function test($arg) {
	debug_print_backtrace();
}
?>
--EXPECTF--
#0  test(Array) called at [%sbug73916.php:%d]
