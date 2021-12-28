--TEST--
call_user_func(): Wrong parameters
--FILE--
<?php

call_user_func(array('Foo', 'bar'));
call_user_func(array(NULL, 'bar'));
call_user_func(array('stdclass', NULL));

?>
--EXPECTF--
Warning: call_user_func() expects parameter 1 to be callable, Foo::bar given in %s on line %d

Warning: call_user_func() expects parameter 1 to be callable, Array given in %s on line %d

Warning: call_user_func() expects parameter 1 to be callable, Array given in %s on line %d
