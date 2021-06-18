--TEST--
foreach() with references
--FILE--
<?php

$arr = array(1 => "one", 2 => "two", 3 => "three");

foreach($arr as $key => $val) {
	$val = $key;
}

print_r($arr);

--EXPECT--
Array
(
    [1] => one
    [2] => two
    [3] => three
)
