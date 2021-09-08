--TEST--
Bug #73663 ("Invalid opcode 65/16/8" occurs with a variable created with list())
--FILE--
<?php
function change(&$ref) {
	$ref = range(1, 10);
	return;
}

$array = array(1);
var_dump(list($val) = $array); // NG: Invalid opcode

change(list($val) = $array);
var_dump($array);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Only variables can be passed by reference in %s on line 10
 -- compile-error
