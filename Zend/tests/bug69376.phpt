--TEST--
Bug #69376 (Wrong ref counting)
--SKIPIF--
skip unsupported return reference from function/method
--FILE--
<?php
function &test() {
    $var = array();
    $var[] =& $var;

    return $var;
};

$a = test();
$b = $a;
$b[0] = 123;

print_r($a);
print_r($b);
?>
--EXPECT--
Array
(
    [0] => 123
)
Array
(
    [0] => 123
)
