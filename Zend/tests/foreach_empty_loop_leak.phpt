--TEST--
Empty foreach loops with exception must not leak
--SKIPIF--
skip TODO ArrayIterator
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
--EXPECT--
Exception caught
