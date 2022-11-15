--TEST--
class name as scalar from ::class keyword error using static in method signature
--FILE--
<?php

class Foo\Bar\One
{
    public function baz($x = static::class)
    {
    }
}
?>
--EXPECTF--
Parse error: (unexpected token `classkey') in %s on line %d
