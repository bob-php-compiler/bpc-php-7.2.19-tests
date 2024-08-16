--TEST--
isset tests
--FILE--
<?php

class C
{
    function test()
    {
        $f = function () {
            var_dump(isset($this));
        };
        $f();
    }
}

$o = new C;
$o->test();

?>
--EXPECTF--
bool(true)
