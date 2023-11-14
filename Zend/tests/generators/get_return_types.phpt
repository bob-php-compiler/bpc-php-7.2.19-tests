--TEST--
Test different types of generator return values (VM operands)
--FILE--
<?php

function gen1() {
    yield;
    return; // CONST
}

$gen = gen1();
$gen->next();
var_dump($gen->getReturn());

function gen2() {
    yield;
    return "str"; // CONST
}

$gen = gen2();
$gen->next();
var_dump($gen->getReturn());

function gen3($var) {
    yield;
    return $var; // CV
}

$gen = gen3(array(1, 2, 3));
$gen->next();
var_dump($gen->getReturn());

function gen4($obj) {
    yield;
    return $obj->prop; // VAR
}

$gen = gen4((object) array('prop' => 321));
$gen->next();
var_dump($gen->getReturn());

function gen5($val) {
    yield;
    return (int) $val; // TMP
}

$gen = gen5("42");
$gen->next();
var_dump($gen->getReturn());

?>
--EXPECT--
NULL
string(3) "str"
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
int(321)
int(42)
