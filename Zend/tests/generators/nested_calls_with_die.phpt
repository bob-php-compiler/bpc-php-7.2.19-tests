--TEST--
Test nested calls with die() in a generator
--FILE--
<?php

function gen() {
    die('Test');
    yield; // force generator
}

function function_with_3_args($arg1, $arg2, $arg3) {
    $gen = gen();
    $gen->rewind();
}

function function_with_4_args($arg1, $arg2, $arg3, $arg4) {
    function_with_3_args(4, 5, 6);
}

function outerGen() {
    function_with_4_args(0, 1, 2, 3);
    yield; // force generator
}

$outerGen = outerGen();
$outerGen->rewind();

?>
--EXPECT--
Test
