--TEST--
Testing call_user_func() with autoload and passing invalid params
--FILE--
<?php

spl_autoload_register(function ($class) {
	var_dump($class);
});

call_user_func(array('foo', 'bar'));
call_user_func(array('', 'bar'));
call_user_func(array($foo, 'bar'));
call_user_func(array($foo, ''));

?>
--EXPECTF--
string(3) "foo"

Warning: call_user_func() expects parameter 1 to be callable, foo::bar given in %s on line %d

Warning: call_user_func() expects parameter 1 to be callable, ::bar given in %s on line %d

Warning: call_user_func() expects parameter 1 to be callable, Array given in %s on line %d

Warning: call_user_func() expects parameter 1 to be callable, Array given in %s on line %d
