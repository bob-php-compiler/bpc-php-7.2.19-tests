--TEST--
array_intersect_ukey callback with reference argument
--FILE--
<?php

function key_cmp (&$a, &$b) {
    echo "a=$a, b=$b\n";
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
var_dump(array_intersect_ukey($arr1, $arr2, 'key_cmp'));
var_dump($arr1, $arr2);

?>
--EXPECTF--

Warning: Parameter 1 to key_cmp() expected to be a reference, value given in %s on line %d

Warning: Parameter 2 to key_cmp() expected to be a reference, value given in %s on line %d
a=a, b=a

Warning: Parameter 1 to key_cmp() expected to be a reference, value given in %s on line %d

Warning: Parameter 2 to key_cmp() expected to be a reference, value given in %s on line %d
a=b, b=a

Warning: Parameter 1 to key_cmp() expected to be a reference, value given in %s on line %d

Warning: Parameter 2 to key_cmp() expected to be a reference, value given in %s on line %d
a=b, b=b

Warning: Parameter 1 to key_cmp() expected to be a reference, value given in %s on line %d

Warning: Parameter 2 to key_cmp() expected to be a reference, value given in %s on line %d
a=c, b=a

Warning: Parameter 1 to key_cmp() expected to be a reference, value given in %s on line %d

Warning: Parameter 2 to key_cmp() expected to be a reference, value given in %s on line %d
a=c, b=b

Warning: Parameter 1 to key_cmp() expected to be a reference, value given in %s on line %d

Warning: Parameter 2 to key_cmp() expected to be a reference, value given in %s on line %d
a=c, b=c
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
