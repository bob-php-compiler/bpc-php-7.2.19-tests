--TEST--
Live range & throw from finally
--FILE--
<?php
function test() {
    try {
        $a = array(1, 2, 3);
        return $a + array();
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
