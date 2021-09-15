--TEST--
testing @ and error_reporting - 3
--FILE--
<?php

error_reporting(E_ALL);

function foo($arg) {
    $a = array();
	echo @$a[0];
}

function bar($arg) {
    $a = array();
	echo @$a[0];
	throw new Exception("test");
}

function foo1() {
    $a = array();
	echo $a[0];
	error_reporting(E_ALL|E_STRICT);
	echo $a[1];
}

try {
	@foo(@bar(@foo1()));
} catch (Exception $e) {
}

var_dump(error_reporting());

echo "Done\n";
?>
--EXPECTF--
Notice: Undefined offset: 1 in %s on line %d
int(32767)
Done
