--TEST--
Bug #67368 (Memory leak with immediately dereferenced array in class constant)
--SKIPIF--
skip class constant not support complex value
--INI--
report_memleaks=1
--FILE--
<?php
class FooBar {
		const bar = ["bar" => 3]["bar"];
}
echo "okey";
--EXPECTF--
okey
