--TEST--
Defined on private constant should not raise exception
--FILE--
<?php

class Foo
{
    const BAR = 1;
}
echo (int)defined('Foo::BAR');
--EXPECTF--
1
