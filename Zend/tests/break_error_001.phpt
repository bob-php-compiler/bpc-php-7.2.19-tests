--TEST--
'break' error (non positive numbers)
--FILE--
<?php
function foo () {
	break 0;
}
?>
--EXPECTF--
Parse error: %s in %s on line 3
