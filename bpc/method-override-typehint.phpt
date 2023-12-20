--TEST--
method override typehint can be omitted
--FILE--
<?php

class A
{
    function test(string &$id)
    {
        var_dump($id);
    }
}

class B extends A
{
    function test(&$id)
    {
        var_dump($id);
    }
}

$b = new B;
$id = 1;
$b->test($id);

?>
--EXPECT--
int(1)
