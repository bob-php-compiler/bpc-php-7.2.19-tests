--TEST--
Closure 012: Undefined lexical variables
--FILE--
<?php
$lambda = function () use ($i) {
    return ++$i;
};
$lambda();
$lambda();
var_dump($i);
$lambda = function () use (&$i) {
    return ++$i;
};
$lambda();
$lambda();
var_dump($i);
?>
--EXPECTF--
NULL
int(2)
