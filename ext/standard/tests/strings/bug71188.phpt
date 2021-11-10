--TEST--
Bug #71188 (str_replace converts integers in original $search array to strings)
--FILE--
<?php
$a = array(0, 1, 2);
$b = array("Nula", "Jedna", "Dva");

var_dump($a);
str_replace($a, $b, "1");
var_dump($a);
?>
--EXPECT--
array(3) {
  [0]=>
  int(0)
  [1]=>
  int(1)
  [2]=>
  int(2)
}
array(3) {
  [0]=>
  int(0)
  [1]=>
  int(1)
  [2]=>
  int(2)
}
