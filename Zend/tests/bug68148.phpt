--TEST--
Bug #68148: $this is null inside include
--ARGS--
--bpc-include-file Zend/tests/bug68148.inc
--FILE--
<?php

class Test {
    public function method() {
        include 'bug68148.inc';
    }
}

(new Test)->method();

?>
--EXPECT--
object(Test)#1 (0) {
}
