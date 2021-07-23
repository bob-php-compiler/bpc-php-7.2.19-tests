--TEST--
'break' error (operator with non-constant operand)
--FILE--
<?php
function foo () {
	break $x;
}
?>
--EXPECTF--
Parse error: %s in %s on line 3
