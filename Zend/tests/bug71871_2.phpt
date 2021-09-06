--TEST--
Bug #71871: Interfaces allow final and abstract functions
--FILE--
<?php

interface test {
    abstract function test();
}

?>
--EXPECTF--
Parse error: Access type for interface method test::test() must be omitted in %s on line %d
