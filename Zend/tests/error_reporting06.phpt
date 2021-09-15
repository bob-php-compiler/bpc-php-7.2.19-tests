--TEST--
testing @ and error_reporting - 6
--FILE--
<?php

error_reporting(E_ALL);

function foo1($arg) {
}

function foo2($arg) {
}

function foo3() {
    $a = array();
	echo $a[0];
	throw new Exception("test");
}

try {
	@foo1(@foo2(@foo3()));
} catch (Exception $e) {
}

var_dump(error_reporting());

echo "Done\n";
?>
--EXPECTF--
int(32767)
Done
