--TEST--
Cannot use() auto-global
--SKIPIF--
skip closure no use
--FILE--
<?php

function test() {
    $fn = function() use($GLOBALS) {
        var_dump($GLOBALS);
    };
    $fn();
}
test();

?>
--EXPECTF--
Fatal error: Cannot use auto-global as lexical variable in %s on line %d
