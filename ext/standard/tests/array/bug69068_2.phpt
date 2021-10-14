--TEST--
Bug #69068: Exchanging array during array_walk -> memory errors (variation)
--FILE--
<?php

$array = array(1, 2, 3);
$array2 = array(4, 5);

function test(&$value, $key) {
    global $array2;
    var_dump($value);
    if ($value == 2) {
        $GLOBALS['array'] = $array2;
    }
    $value *= 10;
}

array_walk($array, 'test');
var_dump($array, $array2);

?>
--EXPECT--
int(1)
int(2)
int(3)
array(2) {
  [0]=>
  int(4)
  [1]=>
  int(5)
}
array(2) {
  [0]=>
  int(4)
  [1]=>
  int(5)
}
