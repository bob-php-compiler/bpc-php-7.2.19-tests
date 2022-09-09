--TEST--
json depth tests
--FILE--
<?php

$a = array(
    array(1),
    array(2),
    array(3),
    array(4),
    array(5),
    array(6),
    array(7)
);
$o = array(
    'k1' => array('k11' => 'v11'),
    'k2' => array('k22' => 'v22'),
    'k3' => array('k33' => 'v33'),
    'k4' => array('k44' => 'v44'),
    'k5' => array('k55' => 'v55'),
    'k6' => array('k66' => 'v66'),
    'k7' => array('k77' => 'v77')
);

$jsonA = json_encode($a, 0, 5);
$jsonO = json_encode($o, 0, 5);
var_dump($jsonA, $jsonO);

$a = json_decode($jsonA, true, 5);
$o = json_decode($jsonO, false, 5);
var_dump($a, $o);

?>
--EXPECTF--
string(29) "[[1],[2],[3],[4],[5],[6],[7]]"
string(134) "{"k1":{"k11":"v11"},"k2":{"k22":"v22"},"k3":{"k33":"v33"},"k4":{"k44":"v44"},"k5":{"k55":"v55"},"k6":{"k66":"v66"},"k7":{"k77":"v77"}}"
array(7) {
  [0]=>
  array(1) {
    [0]=>
    int(1)
  }
  [1]=>
  array(1) {
    [0]=>
    int(2)
  }
  [2]=>
  array(1) {
    [0]=>
    int(3)
  }
  [3]=>
  array(1) {
    [0]=>
    int(4)
  }
  [4]=>
  array(1) {
    [0]=>
    int(5)
  }
  [5]=>
  array(1) {
    [0]=>
    int(6)
  }
  [6]=>
  array(1) {
    [0]=>
    int(7)
  }
}
object(stdClass)#%d (7) {
  ["k1"]=>
  object(stdClass)#%d (1) {
    ["k11"]=>
    string(3) "v11"
  }
  ["k2"]=>
  object(stdClass)#%d (1) {
    ["k22"]=>
    string(3) "v22"
  }
  ["k3"]=>
  object(stdClass)#%d (1) {
    ["k33"]=>
    string(3) "v33"
  }
  ["k4"]=>
  object(stdClass)#%d (1) {
    ["k44"]=>
    string(3) "v44"
  }
  ["k5"]=>
  object(stdClass)#%d (1) {
    ["k55"]=>
    string(3) "v55"
  }
  ["k6"]=>
  object(stdClass)#%d (1) {
    ["k66"]=>
    string(3) "v66"
  }
  ["k7"]=>
  object(stdClass)#%d (1) {
    ["k77"]=>
    string(3) "v77"
  }
}
