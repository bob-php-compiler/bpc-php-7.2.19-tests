--TEST--
bug #71428: Validation type inheritance with = NULL
--FILE--
<?php
class A { }
class B           {  public function m($n, A $a = NULL) { echo "B.m";} };
class C extends B {  public function m($n, A $a) { echo "C.m";} };
?>
--EXPECTF--
Warning: Declaration of C::m($n, A $a) should be compatible with B::m($n, ?A $a = NULL) in %sbug71428.3.php on line 4
