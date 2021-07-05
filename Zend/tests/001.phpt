--TEST--
func_num_args() tests
--FILE--
<?php

function test1() {
	var_dump(func_num_args());
}

function test2($a) {
	var_dump(func_num_args());
}

function test3($a, $b) {
	var_dump(func_num_args());
}

test1();
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
		var_dump(func_num_args());
	}
}

test::test1(1);

echo "Done\n";
?>
--EXPECTF--
int(0)
int(1)
int(2)
int(0)
Exception: Too few arguments to function test3(): 2 required, 1 provided
int(2)
int(1)
Done
