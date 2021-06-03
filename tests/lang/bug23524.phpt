--TEST--
Bug #23524 (Improper handling of constants in array indices)
--FILE--
<?php
  echo "Begin\n";
  define("THE_CONST",123);
  function f($a=array(THE_CONST=>THE_CONST)) {
    print_r($a);
  }
  f();
  f();
  f();
  echo "Done";
?>
--EXPECTF--
Warning: Use of undefined constant THE_CONST - assumed 'THE_CONST' (this will throw an Error in a future version of PHP) in %s on line %d

Warning: Use of undefined constant THE_CONST - assumed 'THE_CONST' (this will throw an Error in a future version of PHP) in %s on line %d
Begin
Array
(
    [123] => 123
)
Array
(
    [123] => 123
)
Array
(
    [123] => 123
)
Done
