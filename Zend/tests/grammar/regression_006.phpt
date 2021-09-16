--TEST--
Test to ensure const list syntax declaration works
--FILE--
<?php

class Obj
{
    const DECLARE = 'declare';
    const RETURN = 'return';
    const FUNCTION = 'function';
    const USE = 'use';
}

echo Obj::DECLARE, PHP_EOL;
echo Obj::RETURN, PHP_EOL;
echo Obj::FUNCTION, PHP_EOL;
echo Obj::USE, PHP_EOL;
echo Obj::

    USE, PHP_EOL;
echo "\nDone\n";
--EXPECTF--
declare
return
function
use
use

Done
