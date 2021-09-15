--TEST--
array_push() function precerve foreach by reference iterator pointer
--SKIPIF--
skip not support foreach as reference
--FILE--
<?php
$a = [1,2,3];
foreach($a as &$v) {
	echo "$v\n";
	if ($v == 3) {
		array_push($a, 4);
	}
}
?>
--EXPECT--
1
2
3
4
