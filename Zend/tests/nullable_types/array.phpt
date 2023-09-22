--TEST--
Explicitly nullable array type
--FILE--
<?php

function _array_(?array $v) {
    return $v;
}

var_dump(_array_(null));
var_dump(_array_(array()));
--EXPECT--
NULL
array(0) {
}
