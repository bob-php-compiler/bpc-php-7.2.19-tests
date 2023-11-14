--TEST--
Return from by-ref generator
--SKIPIF--
skip not supported return reference from function/method
--FILE--
<?php

function &gen() {
    yield;
    $arr = [42];
    return $arr[0];
}

function gen2() {
    var_dump(yield from gen());
}

gen2()->next();

?>
--EXPECT--
int(42)
