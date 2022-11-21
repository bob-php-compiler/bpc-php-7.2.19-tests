--TEST--
Cannot use() auto-global
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
Parse error: Cannot use $GLOBALS as parameter in %s on line %d
