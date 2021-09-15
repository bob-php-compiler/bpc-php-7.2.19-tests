--TEST--
Foreach by reference on constant
--SKIPIF--
skip not support foreach as reference
--FILE--
<?php
for ($i = 0; $i < 3; $i++) {
	foreach ([1,2,3] as &$val) {
		echo "$val\n";
	}
}
?>
--EXPECT--
1
2
3
1
2
3
1
2
3
