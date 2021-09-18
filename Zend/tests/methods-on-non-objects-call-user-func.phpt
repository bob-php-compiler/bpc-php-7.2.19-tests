--TEST--
call_user_func() in combination with "Call to a member function method() on a non-object"
--FILE--
<?php
$comparator= null;
var_dump(call_user_func(array($comparator, 'compare'), 1, 2));
echo "Alive\n";
?>
--EXPECTF--
Warning: call_user_func() expects parameter 1 to be callable, Array given in %s on line %d
NULL
Alive
