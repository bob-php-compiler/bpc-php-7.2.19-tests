--TEST--
call_user_func() behavior when passing literal to reference parameter
--FILE--
<?php

var_dump(call_user_func('sort', []));

?>
--EXPECTF--
Warning: Parameter 1 to sort() expected to be a reference, value given in %s on line %d
bool(true)
