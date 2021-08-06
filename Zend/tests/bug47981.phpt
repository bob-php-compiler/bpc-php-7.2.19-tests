--TEST--
Bug #47981 (error handler not called regardless)
--INI--
error_reporting=0
--ARGS--
--bpc-include-file Zend/tests/bug47981.inc
--FILE--
<?php
function errh($errno, $errstr, $errfile, $errline) {
	var_dump($errstr);
}
set_error_handler("errh");

include "bug47981.inc";

?>
--EXPECTF--
string(60) "Declaration of c::f() should be compatible with b::f($a = 1)"
