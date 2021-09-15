--TEST--
testing @ and error_reporting - 4
--FILE--
<?php

error_reporting(E_ALL);

function foo($arg) {
    $a = array();
	echo $a[1];
	error_reporting(E_ALL|E_STRICT);
}

$v = array();
foo(@$v[0]);

var_dump(error_reporting());

echo "Done\n";
?>
--EXPECTF--
Notice: Undefined offset: 1 in %s on line %d
int(32767)
Done
