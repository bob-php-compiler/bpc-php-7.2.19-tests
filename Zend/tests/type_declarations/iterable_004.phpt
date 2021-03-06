--TEST--
iterable type#004 - Parameter covariance
--SKIPIF--
skip TODO iterable
--FILE--
<?php

class Foo {
    function testArray(array $array) {}

    function testTraversable(Traversable $traversable) {}

    function testScalar(int $int) {}
}

class Bar extends Foo {
    function testArray(iterable $iterable) {}

    function testTraversable(iterable $iterable) {}

    function testScalar(iterable $iterable) {}
}

?>
--EXPECTF--
Warning: Declaration of Bar::testScalar(iterable $iterable) should be compatible with Foo::testScalar(int $int) in %s on line %d
