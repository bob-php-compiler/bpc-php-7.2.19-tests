--TEST--
testing @ and error_reporting - 9
--FILE--
<?php

error_reporting(E_ALL);

function bar() {
    $a = array();
	echo @$a[0];
	echo $a[1];
}

function foo() {
    $a = array();
	echo @$a[2];
	error_reporting(E_ALL|E_STRICT);
	echo $a[3];
	return bar();
}

@foo();

var_dump(error_reporting());

echo "Done\n";
?>
--EXPECTF--
Notice: Undefined offset: 3 in %s on line %d

Notice: Undefined offset: 1 in %s on line %d
int(32767)
Done
