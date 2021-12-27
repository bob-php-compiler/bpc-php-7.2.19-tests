--TEST--
call_user_func() and return value
--FILE--
<?php

$t1 = 'test1';

function test1($arg1, $arg2)
{
	global $t1;
	echo "$arg1 $arg2\n";
	return $t1;
}

function test($func)
{
	debug_zval_dump($func('Direct', 'Call'));
	debug_zval_dump(call_user_func_array($func, array('User', 'Func')));
}

test('test1');

?>
===DONE===
--EXPECTF--
Direct Call
string(5) "test1"
User Func
string(5) "test1"
===DONE===
