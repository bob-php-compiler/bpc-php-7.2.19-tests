--TEST--
Bug #29038 (extract(), EXTR_PREFIX_SAME option prefixes empty strings)
--FILE--
<?php

function f1() {
  $c = extract(array("" => 1),EXTR_PREFIX_SAME,"prefix");
  echo "Extracted:";
  var_dump($c);
  var_dump($prefix_);
}
function f2() {
  $a = 1;
  $c = extract(array("a" => 1),EXTR_PREFIX_SAME,"prefix");
  echo "Extracted:";
  var_dump($c);
  var_dump($prefix_a);
}
function f3() {
  $a = 1;
  $c = extract(array("a" => 1),EXTR_PREFIX_ALL,"prefix");
  echo "Extracted:";
  var_dump($c);
  var_dump($prefix_a);
}
function f4() {
  $c = extract(array("" => 1),EXTR_PREFIX_ALL,"prefix");
  echo "Extracted:";
  var_dump($c);
  var_dump($prefix_);
}
function f5() {
  $c = extract(array("111" => 1),EXTR_PREFIX_ALL,"prefix");
  echo "Extracted:";
  var_dump($c);
  var_dump($prefix_111);
}

f1();
f2();
f3();
f4();
f5();
?>
--EXPECT--
Extracted:int(0)
NULL
Extracted:int(1)
int(1)
Extracted:int(1)
int(1)
Extracted:int(0)
NULL
Extracted:int(1)
int(1)
