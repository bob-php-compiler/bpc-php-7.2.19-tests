--TEST--
Bug #74164 (PHP hangs when an invalid value is dynamically passed to typehinted by-ref arg)
--FILE--
<?php

set_error_handler(function ($type, $msg) {
	throw new Exception($msg);
});

function typehint_func(array &$ref)
{
    var_dump("xxx");
}

call_user_func('typehint_func', 'not_an_array_variable');
?>
--EXPECTF--
Fatal error: Uncaught Exception: Parameter 1 to typehint_func() expected to be a reference, value given in %sbug74164.php:%d
Stack trace:
#0 [internal function]: {closure}(2, '%s')
#1 %sbug74164.php(%d): call_user_func('typehint_func', '%s')
#2 {main}
  thrown in %sbug74164.php on line %d
