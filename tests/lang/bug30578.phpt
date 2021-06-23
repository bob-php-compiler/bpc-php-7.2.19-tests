--TEST--
Bug #30578 (Output buffers flushed before calling __desctruct functions)
--FILE--
<?php

error_reporting(E_ALL);

class Example
{
    function __construct()
    {
        ob_start();
        echo "This should be displayed last.\n";
    }

    function __destruct()
    {
        $buffered_data = ob_get_contents();
        ob_end_clean();

        echo "This should be displayed first.\n";
        echo "Buffered data: $buffered_data";
    }
}

$obj = new Example;

?>
--EXPECTF--
Warning: in %s line 13: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

This should be displayed first.
Buffered data: This should be displayed last.
