--TEST--
class name as scalar from ::class keyword error using parent in method signature
--FILE--
<?php

class Foo\Bar\One
{
    public function baz($x = parent::class)
    {
    }
}
?>
--EXPECTF--
Parse error: (unexpected token `classkey') in %s on line %d
