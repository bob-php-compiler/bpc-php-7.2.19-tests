--TEST--
Class protected constant visibility error
--FILE--
<?php
class A {
	const protectedConst = 'protectedConst';
}

var_dump(A::protectedConst);

?>
--EXPECTF--
string(14) "protectedConst"
