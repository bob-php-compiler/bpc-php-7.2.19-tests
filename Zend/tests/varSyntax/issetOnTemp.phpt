--TEST--
isset() can be used on dereferences of temporary expressions
--FILE--
<?php

var_dump(isset(array(0, 1)[0]));
var_dump(isset((array(0, 1) + array())[0]));
var_dump(isset(array(array(0, 1))[0][0]));
var_dump(isset((array(array(0, 1)) + array())[0][0]));
var_dump(isset(((object) array('a' => 'b'))->a));
//var_dump(isset(array('a' => 'b')->a));
//var_dump(isset("str"->a));
var_dump(isset((array('a' => 'b') + array())->a));
var_dump(isset((array('a' => 'b') + array())->a->b));

?>
--EXPECT--
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(false)
bool(false)
