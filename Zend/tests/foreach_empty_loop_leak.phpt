--TEST--
Empty foreach loops with exception must not leak
--FILE--
<?php

class Foo implements IteratorAggregate {
    public function getIterator() {
        return new ArrayIterator([]);
    }
    public function __destruct() {
        throw new Exception;
    }
}

try {
    foreach (new Foo as $x);
} catch (Exception $e) {
    echo "Exception caught\n";
}

?>
--EXPECTF--
Warning: in %s line %d: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!


Fatal error: Uncaught Exception in %s:%d
Stack trace:
#0 %s(%d): Foo->__destruct()
#1 {main}
  thrown in %s on line %d
