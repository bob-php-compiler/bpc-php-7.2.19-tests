--TEST--
Bug #66509 (copy() showing $context parameter as required)
--SKIPIF--
skip not support Reflection
--FILE--
<?php

$r = new \ReflectionFunction('copy');

foreach($r->getParameters() as $p) {
    var_dump($p->isOptional());
}
?>
--EXPECT--
bool(false)
bool(false)
bool(true)
