--TEST--
Bug #70332 (Wrong behavior while returning reference on object)
--SKIPIF--
skip unsupported return reference from function/method
--FILE--
<?php
function & test($arg) {
	return $arg;
}

$arg = new Stdclass();
$arg->name = array();

test($arg)->name[1] = "xxxx";

print_r($arg);
?>
--EXPECT--
stdClass Object
(
    [name] => Array
        (
            [1] => xxxx
        )

)
