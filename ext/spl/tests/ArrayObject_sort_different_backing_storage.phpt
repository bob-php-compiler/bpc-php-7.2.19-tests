--TEST--
Test sorting of various ArrayObject backing storage
--FILE--
<?php

$obj = (object)array('a' => 2, 'b' => 1);
$ao = new ArrayObject($obj);
$ao->uasort(function($a, $b) { return $a <=> $b; });
var_dump($ao);

$ao2 = new ArrayObject($ao);
$ao2->uasort(function($a, $b) { return $b <=> $a; });
var_dump($ao2);

$ao3 = new ArrayObject();
$ao3->exchangeArray($ao3);
$ao3->a = 2;
$ao3->b = 1;
$ao3->uasort(function($a, $b) { return $a <=> $b; });
var_dump($ao3);

$ao4 = new ArrayObject(array());
$ao4->uasort(function($a, $b) { return $a <=> $b; });
var_dump($ao4);

$ao5 = new ArrayObject(array('a' => 2, 'b' => 1));
$ao5->uasort(function($a, $b) { return $a <=> $b; });
var_dump($ao5);

?>
--EXPECTF--
object(ArrayObject)#%d (1) {
  ["storage":"ArrayObject":private]=>
  object(stdClass)#%d (2) {
    ["b"]=>
    int(1)
    ["a"]=>
    int(2)
  }
}
object(ArrayObject)#%d (1) {
  ["storage":"ArrayObject":private]=>
  object(ArrayObject)#%d (1) {
    ["storage":"ArrayObject":private]=>
    object(stdClass)#%d (2) {
      ["a"]=>
      int(2)
      ["b"]=>
      int(1)
    }
  }
}
object(ArrayObject)#%d (2) {
  ["b"]=>
  int(1)
  ["a"]=>
  int(2)
}
object(ArrayObject)#%d (1) {
  ["storage":"ArrayObject":private]=>
  array(0) {
  }
}
object(ArrayObject)#%d (1) {
  ["storage":"ArrayObject":private]=>
  array(2) {
    ["b"]=>
    int(1)
    ["a"]=>
    int(2)
  }
}
