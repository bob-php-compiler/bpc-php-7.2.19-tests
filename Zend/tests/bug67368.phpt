--TEST--
Bug #67368 (Memory leak with immediately dereferenced array in class constant)
--INI--
report_memleaks=1
--FILE--
<?php
class FooBar {
		const bar = array("bar" => 3)["bar"];
}
echo "okey";
--EXPECTF--
okey
