--TEST--
globals in local scope - 3
--INI--
variables_order="egpcs"
--ARGS--
--bpc-include-file Zend/tests/globals.inc \
--FILE--
<?php

function test() {
	include dirname(__FILE__)."/globals.inc";
}

test();

echo "Done\n";
?>
--EXPECTF--
bool(true)
bool(false)
string(5) "array"
int(%d)
string(%d) "%s"

Notice: Undefined index: PHP_SELF in %s on line %d
NULL
NULL
Done
