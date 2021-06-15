--TEST--
Square bracket associative array shortcut test
--SKIPIF--
skip array declare
--FILE--
<?php
print_r(["foo" => "orange", "bar" => "apple", "baz" => "lemon"]);
?>
--EXPECT--
Array
(
    [foo] => orange
    [bar] => apple
    [baz] => lemon
)
