--TEST--
Closure 045: Closures created in static methods are not implicitly static
--SKIPIF--
skip closure has only one method: __invoke()
--FILE--
<?php

class A {
    static function foo() {
        return function () {};
    }
}

$a = A::foo();
$a->bindTo(new A);

echo "Done.\n";
--EXPECTF--
Done.
