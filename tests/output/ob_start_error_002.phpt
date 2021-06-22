--TEST--
Test wrong number of arguments and wrong arg types for ob_start()
--FILE--
<?php
/*
 * proto bool ob_start([ string|array user_function [, int chunk_size [, bool erase]]])
 * Function is implemented in main/output.c
*/

Class C {
	static function f($str) {
		return $str;
	}
}

var_dump(ob_start(array("nonExistent","f")));
var_dump(ob_start(array("C","nonExistent")));
var_dump(ob_start("C::no"));
var_dump(ob_start("no"));
echo "done"
?>
--EXPECTF--
Warning: ob_start() expects parameter 1 to be callable, nonExistent::f given in %s on line 13

Notice: ob_start(): failed to create buffer in %s on line 13
bool(false)

Warning: ob_start() expects parameter 1 to be callable, C::nonExistent given in %s on line 14

Notice: ob_start(): failed to create buffer in %s on line 14
bool(false)

Warning: ob_start() expects parameter 1 to be callable, C::no given in %s on line 15

Notice: ob_start(): failed to create buffer in %s on line 15
bool(false)

Warning: ob_start() expects parameter 1 to be callable, no given in %s on line 16

Notice: ob_start(): failed to create buffer in %s on line 16
bool(false)
done
