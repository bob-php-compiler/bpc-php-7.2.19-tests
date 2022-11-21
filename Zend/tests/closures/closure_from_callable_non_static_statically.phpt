--TEST--
Testing Closure::fromCallable() functionality: Getting non-static method statically
--SKIPIF--
skip closure has only one method: __invoke()
--FILE--
<?php

class A {
    public function method() {
    }
}

try {
    $fn = Closure::fromCallable(['A', 'method']);
    $fn();
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

?>
--EXPECT--
Failed to create closure from callable: non-static method A::method() should not be called statically
