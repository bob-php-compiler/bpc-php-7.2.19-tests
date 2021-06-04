--TEST--
ZE2 Destructors and echo
--FILE--
<?php

class Test
{
    function __construct() {
        echo __METHOD__ . "\n";
    }

    function __destruct() {
        echo __METHOD__ . "\n";
    }
}

$o = new Test;

?>
===DONE===
--EXPECTF--
Warning: in %s line 9: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Test::__construct
===DONE===
Test::__destruct
