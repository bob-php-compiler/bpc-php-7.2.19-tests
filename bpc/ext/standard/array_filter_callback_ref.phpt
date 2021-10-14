--TEST--
array_filter callback with reference argument
--FILE--
<?php

$arr = array('a' => 'A', 'b' => 'B', 'c' => 'C');

function filter_data(&$v)
{
    echo "v = $v\n";
    $v .= $v;
    return false;
}

function filter_both(&$v, &$k)
{
    echo "v = $v, k = $k\n";
    $v .= $v;
    $k .= $k;
    return false;
}

function filter_key(&$k)
{
    echo "k = $k\n";
    $k .= $k;
    return false;
}

// callback unpassed

var_dump(array_filter($arr));
var_dump($arr);

// mode default 0

var_dump(array_filter($arr, 'filter_data'));
var_dump($arr);

// mode both

var_dump(array_filter($arr, 'filter_both', ARRAY_FILTER_USE_BOTH));
var_dump($arr);

// mode key

var_dump(array_filter($arr, 'filter_key', ARRAY_FILTER_USE_KEY));
var_dump($arr);

?>
--EXPECTF--
array(3) {
  ["a"]=>
  string(1) "A"
  ["b"]=>
  string(1) "B"
  ["c"]=>
  string(1) "C"
}
array(3) {
  ["a"]=>
  string(1) "A"
  ["b"]=>
  string(1) "B"
  ["c"]=>
  string(1) "C"
}

Warning: Parameter 1 to filter_data() expected to be a reference, value given in %s on line %d
v = A

Warning: Parameter 1 to filter_data() expected to be a reference, value given in %s on line %d
v = B

Warning: Parameter 1 to filter_data() expected to be a reference, value given in %s on line %d
v = C
array(0) {
}
array(3) {
  ["a"]=>
  string(1) "A"
  ["b"]=>
  string(1) "B"
  ["c"]=>
  string(1) "C"
}

Warning: Parameter 1 to filter_both() expected to be a reference, value given in %s on line %d

Warning: Parameter 2 to filter_both() expected to be a reference, value given in %s on line %d
v = A, k = a

Warning: Parameter 1 to filter_both() expected to be a reference, value given in %s on line %d

Warning: Parameter 2 to filter_both() expected to be a reference, value given in %s on line %d
v = B, k = b

Warning: Parameter 1 to filter_both() expected to be a reference, value given in %s on line %d

Warning: Parameter 2 to filter_both() expected to be a reference, value given in %s on line %d
v = C, k = c
array(0) {
}
array(3) {
  ["a"]=>
  string(1) "A"
  ["b"]=>
  string(1) "B"
  ["c"]=>
  string(1) "C"
}

Warning: Parameter 1 to filter_key() expected to be a reference, value given in %s on line %d
k = a

Warning: Parameter 1 to filter_key() expected to be a reference, value given in %s on line %d
k = b

Warning: Parameter 1 to filter_key() expected to be a reference, value given in %s on line %d
k = c
array(0) {
}
array(3) {
  ["a"]=>
  string(1) "A"
  ["b"]=>
  string(1) "B"
  ["c"]=>
  string(1) "C"
}
