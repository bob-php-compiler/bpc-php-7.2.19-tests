--TEST--
Class private constant visibility error
--FILE--
<?php
class A {
	const privateConst = 'privateConst';
}

var_dump(A::privateConst);

?>
--EXPECTF--
string(12) "privateConst"
