--TEST--
ZE2 Do not call destructors if constructor fails
--FILE--
<?php

class Test
{
    function __construct($msg) {
        echo __METHOD__ . "($msg)\n";
        throw new Exception($msg);
    }

    function __destruct() {
        echo __METHOD__ . "\n";
    }
}

try
{
    $o = new Test('Hello');
    unset($o);
}
catch (Exception $e)
{
    echo 'Caught ' . get_class($e) . '(' . $e->getMessage() . ")\n";
}

?>
===DONE===
--EXPECTF--
Warning: in %s line 10: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Test::__construct(Hello)
Caught Exception(Hello)
===DONE===
