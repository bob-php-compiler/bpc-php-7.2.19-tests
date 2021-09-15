--TEST--
Dtor may throw exception furing FE_FETCH assignment
--FILE--
<?php

class A
{
    function __destruct() {
        throw new Exception("foo");
    }
}

$v = new A;

try {
    foreach (array(1, 2) as $v) {
        var_dump($v);
    }
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}

?>
--EXPECTF--
Warning: in %s line 5: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

int(1)
int(2)

Fatal error: Uncaught Exception: foo in %s:6
Stack trace:
#0 %s(%d): A->__destruct()
#1 {main}
  thrown in %s on line %d
