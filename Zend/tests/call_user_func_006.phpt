--TEST--
call_user_func() should error on reference arguments
--FILE--
<?php

function bar(&$ref) {
    $ref = 24;
}

$y = 42;
$ref =& $y;
call_user_func('bar', $y);
var_dump($y);

?>
--EXPECTF--
Warning: Parameter 1 to bar() expected to be a reference, value given in %s on line %d
int(42)
