--TEST--
Test to ensure ::class is still reserved in obj scope
--FILE--
<?php

class Obj
{
    const CLASS = 'class';
}

?>
--EXPECTF--
Parse error: %s in %s on line %d
