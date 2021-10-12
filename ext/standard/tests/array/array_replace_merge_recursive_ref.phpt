--TEST--
Test array_(replace|merge)_recursive with references
--FILE--
<?php

$one = array(1);
$two = array(42);
$arr1 = array('k' => &$one);
$arr2 = array('k' => &$two);
var_dump(current($one), current($two));
array_replace_recursive($arr1, $arr2);
var_dump(current($one), current($two));

$one = array(1);
$two = array(42);
$arr1 = array('k' => &$one);
$arr2 = array('k' => &$two);
var_dump(current($one), current($two));
array_merge_recursive($arr1, $arr2);
var_dump(current($one), current($two));

?>
--EXPECT--
int(1)
int(42)
int(1)
int(42)
int(1)
int(42)
int(1)
int(42)
