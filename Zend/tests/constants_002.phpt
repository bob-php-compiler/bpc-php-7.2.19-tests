--TEST--
Defining constants with non-scalar values
--FILE--
<?php

define('foo', new stdClass);
var_dump(foo);

define('foo', fopen('/proc/self/comm', 'r'));
var_dump(foo);

?>
--EXPECTF--
Warning: Constants may only evaluate to scalar values or arrays in %s on line %d

Warning: Use of undefined constant foo - assumed 'foo' (this will throw an Error in a future version of PHP) in %s on line %d
string(%d) "foo"
resource(%d) of type (stream)
