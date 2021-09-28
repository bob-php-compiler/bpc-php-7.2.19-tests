--TEST--
Try finally (segfault with empty break)
--SKIPIF--
skip not support finally (try..catch..finally)
--FILE--
<?php
function foo () {
	try {
		break;
	} finally {
	}
}

foo();
?>
--EXPECTF--
Fatal error: 'break' not in the 'loop' or 'switch' context in %stry_finally_011.php on line %d
