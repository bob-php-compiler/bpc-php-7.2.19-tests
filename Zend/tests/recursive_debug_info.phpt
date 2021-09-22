--TEST--
Test recursive __debugInfo() method
--SKIPIF--
skip not support __debugInfo()
--FILE--
<?php

class Test {
    public function __debugInfo() {
        return [$this];
    }
}

var_dump(new Test);

?>
--EXPECT--
object(Test)#1 (1) {
  [0]=>
  *RECURSION*
}
