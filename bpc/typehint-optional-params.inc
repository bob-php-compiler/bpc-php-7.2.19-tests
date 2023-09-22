<?php

class A {
    const TYPE_INT      = 1;
    const TYPE_BOOL     = true;
    const TYPE_FLOAT    = 1.1;
    const TYPE_STRING   = 'hello';
    const TYPE_ARRAY    = array(1,2,3);
    const TYPE_CALLABLE = 'strlen';
}

function test1(
    $arg1 = ENV,
    $arg2 = A::TYPE_INT,
    $arg3 = A::TYPE_BOOL,
    $arg4 = A::TYPE_FLOAT,
    $arg5 = A::TYPE_STRING,
    $arg6 = A::TYPE_ARRAY,
    $arg7 = A::TYPE_CALLABLE
) {
    var_dump($arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $arg7);
}

test1();

function test2(
    string      $arg1 = ENV,
    int         $arg2 = A::TYPE_INT,
    bool        $arg3 = A::TYPE_BOOL,
    float       $arg4 = A::TYPE_FLOAT,
    string      $arg5 = A::TYPE_STRING,
    array       $arg6 = A::TYPE_ARRAY,
    callable    $arg7 = A::TYPE_CALLABLE
) {
    var_dump($arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $arg7);
}

test2();
