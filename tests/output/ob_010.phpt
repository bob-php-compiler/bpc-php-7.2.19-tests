--TEST--
output buffering - fatalism
--FILE--
<?php
function obh($s, $phase)
{
	return print_r($s, 1);
}
ob_start("obh");
echo "foo\n";
?>
--EXPECTF--
foo
