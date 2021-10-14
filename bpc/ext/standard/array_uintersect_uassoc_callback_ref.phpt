--TEST--
array_uintersect_uassoc callback with reference argument
--FILE--
<?php

function cmp (&$a, &$b) {
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
var_dump(array_uintersect_uassoc($arr1, $arr2, 'cmp', 'cmp'));
var_dump($arr1, $arr2);

?>
--EXPECTF--

Warning: Parameter 1 to cmp() expected to be a reference, value given in %s on line %d

Warning: Parameter 2 to cmp() expected to be a reference, value given in %s on line %d
a = a, b = a

Warning: Parameter 1 to cmp() expected to be a reference, value given in %s on line %d

Warning: Parameter 2 to cmp() expected to be a reference, value given in %s on line %d
a = A, b = A

Warning: Parameter 1 to cmp() expected to be a reference, value given in %s on line %d

Warning: Parameter 2 to cmp() expected to be a reference, value given in %s on line %d
a = b, b = a

Warning: Parameter 1 to cmp() expected to be a reference, value given in %s on line %d

Warning: Parameter 2 to cmp() expected to be a reference, value given in %s on line %d
a = b, b = b

Warning: Parameter 1 to cmp() expected to be a reference, value given in %s on line %d

Warning: Parameter 2 to cmp() expected to be a reference, value given in %s on line %d
a = B, b = B

Warning: Parameter 1 to cmp() expected to be a reference, value given in %s on line %d

Warning: Parameter 2 to cmp() expected to be a reference, value given in %s on line %d
a = c, b = a

Warning: Parameter 1 to cmp() expected to be a reference, value given in %s on line %d

Warning: Parameter 2 to cmp() expected to be a reference, value given in %s on line %d
a = c, b = b

Warning: Parameter 1 to cmp() expected to be a reference, value given in %s on line %d

Warning: Parameter 2 to cmp() expected to be a reference, value given in %s on line %d
a = c, b = c

Warning: Parameter 1 to cmp() expected to be a reference, value given in %s on line %d

Warning: Parameter 2 to cmp() expected to be a reference, value given in %s on line %d
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
