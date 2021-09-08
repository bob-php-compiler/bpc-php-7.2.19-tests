--TEST--
Bug #73156 (segfault on undefined function)
--ARGS--
--bpc-include-file Zend/tests/bug73156.inc
--FILE--
<?php
class A {
    public function __call($name, $args) {
        include 'bug73156.inc';
    }
}

$a = new A();

$a->test("test");
?>
--EXPECTF--
array(2) {
  [0]=>
  array(4) {
    ["file"]=>
    string(%d) "%sbug73156.php"
    ["line"]=>
    int(4)
    ["function"]=>
    string(7) "include"
    ["args"]=>
    array(1) {
      [0]=>
      string(67) "%sbug73156.inc"
    }
  }
  [1]=>
  array(7) {
    ["file"]=>
    string(%d) "%sbug73156.php"
    ["line"]=>
    int(10)
    ["function"]=>
    string(6) "__call"
    ["class"]=>
    string(1) "A"
    ["object"]=>
    object(A)#%d (0) {
    }
    ["type"]=>
    string(2) "->"
    ["args"]=>
    array(2) {
      [0]=>
      string(4) "test"
      [1]=>
      array(1) {
        [0]=>
        string(4) "test"
      }
    }
  }
}
