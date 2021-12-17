--TEST--
Test is_iterable() function
--FILE--
<?php

var_dump(is_iterable(array(1, 2, 3)));
// TODO ArrayIterator
//var_dump(is_iterable(new ArrayIterator([1, 2, 3])));
var_dump(is_iterable(1));
var_dump(is_iterable(3.14));
var_dump(is_iterable(new stdClass()));

?>
--EXPECT--
bool(true)
bool(false)
bool(false)
bool(false)
