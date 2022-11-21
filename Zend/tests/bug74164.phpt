--TEST--
Bug #74164 (PHP hangs when an invalid value is dynamically passed to typehinted by-ref arg)
--FILE--
<?php

set_error_handler(function ($type, $msg) {
	throw new Exception($msg);
});

call_user_func(function (array &$ref) {var_dump("xxx");}, 'not_an_array_variable');
?>
--EXPECTF--
Fatal error: Uncaught TypeError: Argument 1 passed to {closure}() must be of the type array, string given in %sbug74164.php:%d
Stack trace:
#0 [internal function]: {closure}('not_an_array_va...')
#1 tests/bug74164.php(7): call_user_func(Object(Closure), 'not_an_array_va...')
#2 {main}
  thrown in %sbug74164.php on line %d
