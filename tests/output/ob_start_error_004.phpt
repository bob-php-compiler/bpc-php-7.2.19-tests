--TEST--
Test ob_start() with non existent callback method.
--FILE--
<?php
/*
 * proto bool ob_start([ string|array user_function [, int chunk_size [, bool erase]]])
 * Function is implemented in main/output.c
*/

Class C {
}

$c = new C;
var_dump(ob_start(array($c, 'f')));
echo "done"
?>
--EXPECTF--
Warning: ob_start() expects parameter 1 to be callable, C::f given in %s on line %d

Notice: ob_start(): failed to create buffer in %s on line 11
bool(false)
done
