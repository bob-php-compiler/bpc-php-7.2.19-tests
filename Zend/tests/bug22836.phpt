--TEST--
Bug #22836 (returning references to NULL)
--SKIPIF--
skip unsupported return reference from function/method
--FILE--
<?php
function &f()
{
	$x = "foo";
	var_dump($x);
	print "'$x'\n";
	return ($a);
}
for ($i = 0; $i < 8; $i++) {
	$h =& f();
}
?>
--EXPECTF--
string(3) "foo"
'foo'
string(3) "foo"
'foo'
string(3) "foo"
'foo'
string(3) "foo"
'foo'
string(3) "foo"
'foo'
string(3) "foo"
'foo'
string(3) "foo"
'foo'
string(3) "foo"
'foo'
