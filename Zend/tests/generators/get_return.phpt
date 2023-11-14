--TEST--
Generator::getReturn() success cases
--FILE--
<?php

function gen1() {
    return 42;
    yield 24;
}

$gen = gen1();
// yield编译时会被优化掉
try {
    var_dump($gen->getReturn());
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

function gen2() {
    yield 24;
    return 42;
}

$gen = gen2();
var_dump($gen->current());
$gen->next();
var_dump($gen->getReturn());

function gen3() {
    $var = 24;
    yield $var;
    return 42;
}

$gen = gen3();
var_dump($gen->current());
$gen->next();
var_dump($gen->getReturn());

// Return types for generators specify the return of the function,
// not of the generator return value, so this code is okay
function gen4()/* : Generator */{
    yield 24;
    return 42;
}

$gen = gen4();
var_dump($gen->current());
$gen->next();
var_dump($gen->getReturn());

// Has no explicit return, but implicitly return NULL at the end
function gen5() {
    yield 24;
}

$gen = gen5();
var_dump($gen->current());
$gen->next();
var_dump($gen->getReturn());

// yield编译时会被优化掉
function gen6()/* : Generator */{
    return;
    yield 24;
}

$gen = gen6();
var_dump($gen);

?>
--EXPECTF--
Call to a member function getReturn() on integer
int(24)
int(42)
int(24)
int(42)
int(24)
int(42)
int(24)
NULL
NULL
