--TEST--
Bug #70987 (static::class within Closure::call() causes segfault)
--SKIPIF--
skip closure has only one method: __invoke()
--FILE--
<?php

class foo {}
$bar = function () {
   return static::class;
};

var_dump($bar->call(new foo));

?>
--EXPECTF--
string(3) "foo"
