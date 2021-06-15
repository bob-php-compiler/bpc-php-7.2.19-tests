--TEST--
Square bracket array shortcut test
--SKIPIF--
skip array declare
--FILE--
<?php
print_r([1, 2, 3]);
?>
--EXPECT--
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
)
