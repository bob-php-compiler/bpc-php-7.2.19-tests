--TEST--
testing traits in anon classes
--SKIPIF--
skip not support anonymous class
--FILE--
<?php

trait Foo {
    public function someMethod() {
      return "bar";
    }
}

$anonClass = new class {
    use Foo;
};

var_dump($anonClass->someMethod());
--EXPECT--
string(3) "bar"
