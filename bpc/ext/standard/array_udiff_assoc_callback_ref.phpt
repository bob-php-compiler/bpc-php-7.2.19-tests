--TEST--
array_udiff_assoc callback with reference argument
--FILE--
<?php

function test (&$a, &$b) {
    echo "a=$a, b=$b\n";
    $a .= $a;
    $b .= $b;
    return 1;
}

$arr1 = array('a' => 'A', 'b' => 'B', 'c' => 'C');
$arr2 = array('a' => 'A', 'b' => 'B', 'c' => 'C');
var_dump(array_udiff_assoc($arr1, $arr2, 'test'));
var_dump($arr1, $arr2);

?>
--EXPECT--
a=A, b=A
a=B, b=B
a=C, b=C
array(3) {
  ["a"]=>
  string(2) "AA"
  ["b"]=>
  string(2) "BB"
  ["c"]=>
  string(2) "CC"
}
array(3) {
  ["a"]=>
  string(2) "AA"
  ["b"]=>
  string(2) "BB"
  ["c"]=>
  string(2) "CC"
}
array(3) {
  ["a"]=>
  string(2) "AA"
  ["b"]=>
  string(2) "BB"
  ["c"]=>
  string(2) "CC"
}
