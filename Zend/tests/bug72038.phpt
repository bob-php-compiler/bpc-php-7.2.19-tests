--TEST--
Bug #72038 (Function calls with values to a by-ref parameter don't always throw a notice)
--FILE--
<?php

test($baz = &$bar);
var_dump($baz);

function test(&$param) {
        $param = 1;
}

?>
--EXPECTF--
int(1)
