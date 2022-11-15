--TEST--
class name as scalar from ::class keyword error using parent in class constant
--FILE--
<?php

class Foo\Bar\One
{
    const Baz = parent::class;
}
?>
--EXPECTF--
Parse error: (unexpected token `classkey') in %s on line %d
