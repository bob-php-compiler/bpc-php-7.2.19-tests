--TEST--
testing @ and error_reporting - 5
--FILE--
<?php

error_reporting(E_ALL);

class test {
	function __get($name) {
	    $a = array();
		return $a[0];
	}
	function __set($name, $value) {
	    $a = array();
		return $a[1];
	}
}

$test = new test;

$test->abc = 123;
echo $test->bcd;

@$test->qwe = 123;
echo @$test->wer;

var_dump(error_reporting());

echo "Done\n";
?>
--EXPECTF--
Notice: Undefined offset: 1 in %s on line %d

Notice: Undefined offset: 0 in %s on line %d
int(32767)
Done
