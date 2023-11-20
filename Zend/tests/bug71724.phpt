--TEST--
Bug #71724: yield from does not count EOLs
--SKIPIF--
skip TODO
--FILE--
<?php

function test()
{
    yield




    from array(__LINE__);
}
var_dump(test()->current());

?>
--EXPECT--
int(10)
