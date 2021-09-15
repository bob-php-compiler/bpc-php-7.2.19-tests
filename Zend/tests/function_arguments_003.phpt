--TEST--
Function Argument Parsing #003
--FILE--
<?php
define('a', 10);

function t1($a = 1 + 1, $b = 1 << 2, $c = "foo" . "bar", $d = a * 10) {
	var_dump($a, $b, $c, $d);
}

t1();
?>
--EXPECTF--
Warning: Use of undefined constant a - assumed 'a' (this will throw an Error in a future version of PHP) in %s on line 0

Warning: A non-numeric value encountered in %s on line 0
int(2)
int(4)
string(6) "foobar"
int(100)
