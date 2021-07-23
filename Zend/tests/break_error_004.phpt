--TEST--
'break' error (wrong level)
--FILE--
<?php
function foo () {
	while (1) {
		break 2;
	}
}
?>
--EXPECTF--
Parse error: %s in %sbreak_error_004.php on line 4
