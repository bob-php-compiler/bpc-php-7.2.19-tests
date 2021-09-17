--TEST--
list() with both keyed and unkeyed elements
--SKIPIF--
skip not support nested list and `[]` list and keyed list
--FILE--
<?php

$contrivedKeyedAndUnkeyedArrayExample = [
    0,
    1 => 1,
    "foo" => "bar"
];

list($zero, 1 => $one, "foo" => $foo) = $contrivedKeyedAndUnkeyedArrayExample;

?>
--EXPECTF--
Fatal error: Cannot mix keyed and unkeyed array entries in assignments in %s on line %d
