--TEST--
func_get_args() tests
--FILE--
<?php

function test1() {
	var_dump(func_get_args());
}

function test2($a) {
	var_dump(func_get_args());
}

function test3($a, $b) {
	var_dump(func_get_args());
}

test1();
test1(10);
test2(1);
test3(1,2);

call_user_func("test1");
try {
	call_user_func("test3", 1);
} catch (Throwable $e) {
	echo "Exception: " . $e->getMessage() . "\n";
}
call_user_func("test3", 1, 2);

class test {
	static function test1($a) {
		var_dump(func_get_args());
	}
}

test::test1(1);

echo "Done\n";
?>
--EXPECTF--
array(0) {
}
array(1) {
  [0]=>
  int(10)
}
array(1) {
  [0]=>
  int(1)
}
array(2) {
  [0]=>
  int(1)
  [1]=>
  int(2)
}
array(0) {
}
Exception: Too few arguments to function test3(): 2 required, 1 provided
array(2) {
  [0]=>
  int(1)
  [1]=>
  int(2)
}
array(1) {
  [0]=>
  int(1)
}
Done
