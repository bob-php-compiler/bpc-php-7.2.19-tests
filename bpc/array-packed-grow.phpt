--TEST--
array tests
--FILE--
<?php

// grow condition:
// key >= nTableSize && (key >> 1) < nTableSize && (nTableSize >> 1) < nNumOfElements
// nTableSize = 16
// key = 16: 16 >= 16 && 8 < 16 && 8 < 11

$arr = array(
    1  => 1,
    2  => 2,
    3  => 3,
    4  => 4,
    5  => 5,
    6  => 6,
    7  => 7,
    8  => 8,
    10 => 9,
    14 => 10,
    15 => 11,
    16 => 12, // grow here
    17 => 13
);

var_dump(isset($arr['']));

?>
--EXPECT--
bool(false)
