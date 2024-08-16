--TEST--
empty tests
--FILE--
<?php

class C
{
    function test()
    {
        $f = function () {
            var_dump(empty($this));
        };
        $f();
    }
}

$o = new C;
$o->test();

?>
--EXPECTF--
bool(false)
