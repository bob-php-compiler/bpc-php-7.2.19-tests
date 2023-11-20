--TEST--
Bug #70397 (Segmentation fault when using Closure::call and yield)
--SKIPIF--
skip bpc closure has only one method: __invoke()
--FILE--
<?php

$f = function () {
    $this->value = true;
    yield $this->value;
};

var_dump($f->call(new class {})->current());

?>
--EXPECT--
bool(true)
