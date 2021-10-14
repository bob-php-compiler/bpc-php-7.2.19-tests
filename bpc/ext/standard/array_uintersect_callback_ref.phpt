--TEST--
array_uintersect callback with reference argument
--FILE--
<?php

function data_cmp (&$a, &$b) {
    echo "a = $a, b = $b\n";
    if ($a == $b) {
        $result = 0;
    } else {
        $result = $a > $b ? 1 : -1;
    }
    $a .= $a;
    $b .= $b;
    return $result;
}

$arr1 = array('a' => 'A', 'b' => 'B', 'c' => 'C');
$arr2 = array('a' => 'A', 'b' => 'B', 'c' => 'C');
var_dump(array_uintersect($arr1, $arr2, 'data_cmp'));
var_dump($arr1, $arr2);

?>
--EXPECTF--

Warning: Parameter 1 to data_cmp() expected to be a reference, value given in %s on line %d

Warning: Parameter 2 to data_cmp() expected to be a reference, value given in %s on line %d
a = A, b = A

Warning: Parameter 1 to data_cmp() expected to be a reference, value given in %s on line %d

Warning: Parameter 2 to data_cmp() expected to be a reference, value given in %s on line %d
a = B, b = A

Warning: Parameter 1 to data_cmp() expected to be a reference, value given in %s on line %d

Warning: Parameter 2 to data_cmp() expected to be a reference, value given in %s on line %d
a = B, b = B

Warning: Parameter 1 to data_cmp() expected to be a reference, value given in %s on line %d

Warning: Parameter 2 to data_cmp() expected to be a reference, value given in %s on line %d
a = C, b = A

Warning: Parameter 1 to data_cmp() expected to be a reference, value given in %s on line %d

Warning: Parameter 2 to data_cmp() expected to be a reference, value given in %s on line %d
a = C, b = B

Warning: Parameter 1 to data_cmp() expected to be a reference, value given in %s on line %d

Warning: Parameter 2 to data_cmp() expected to be a reference, value given in %s on line %d
a = C, b = C
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
array(3) {
  ["a"]=>
  string(1) "A"
  ["b"]=>
  string(1) "B"
  ["c"]=>
  string(1) "C"
}
