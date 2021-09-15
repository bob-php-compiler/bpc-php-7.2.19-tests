--TEST--
Foreach by reference and inserting new element when we are already at the end
--SKIPIF--
skip not support foreach as reference
--FILE--
<?php
$a = [1];
foreach($a as &$v) {
	echo "$v\n";
	$a[1]=2;
}
?>
--EXPECT--
1
2
