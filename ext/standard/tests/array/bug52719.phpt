--TEST--
Bug #52719: array_walk_recursive crashes if third param of the function is by reference
--FILE--
<?php

function test($value, $key, &$userdata) { }

$array = array("hello", array("world"));
$userdata = array();
array_walk_recursive(
    $array,
    'test',
    $userdata
);
echo "Done";
?>
--EXPECTF--
Done
