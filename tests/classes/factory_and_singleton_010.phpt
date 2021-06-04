--TEST--
ZE2 factory and singleton, test 10
--FILE--
<?php
class test {

  private function __destruct() {
  	echo __METHOD__ . "\n";
  }
}

$obj = new test;

?>
===DONE===
--EXPECTF--
Warning: in %s line 4: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

*** ERROR:compile-error:
Error: The magic method test::__destruct() must have public visibility in %s on line 4
 -- compile-error
