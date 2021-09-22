--TEST--
Live range & throw from finally
--SKIPIF--
skip not support finally (try..catch..finally)
--FILE--
<?php
function test() {
    try {
        $a = [1, 2, 3];
        return $a + [];
    } finally {
        throw new Exception;
    }
}

try {
    test();
} catch (Exception $e) {
	echo "exception\n";
}
?>
--EXPECT--
exception
