--TEST--
Loop var dtor throwing exception during return inside try/catch inside finally
--FILE--
<?php

class Dtor {
    public function __destruct() {
        throw new Exception(2);
    }
}

function test() {
    try {
        throw new Exception(1);
    } finally {
        try {
            foreach ([new Dtor] as $v) {
                unset($v);
                return 42;
            }
        } catch (Exception $e) {
        }
    }
}

try {
    test();
} catch (Exception $e) {
    echo $e, "\n";
}

?>
--EXPECTF--
Warning: in %s line %d: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Exception: 1 in %s:%d
Stack trace:
#0 %s(%d): test()
#1 {main}

Fatal error: Uncaught Exception: 2 in %s:%d
Stack trace:
#0 %s(%d): Dtor->__destruct()
#1 {main}
  thrown in %s on line %d
