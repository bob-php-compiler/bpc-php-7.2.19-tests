--TEST--
Test possible constant naming regression on procedural scope
--FILE--
<?php

class Obj
{
    const return = 'yep';
}

define('return', 'nope');
var_dump(Obj::return);
var_dump(constant('return'));
--EXPECTF--
string(3) "yep"
string(4) "nope"
