--TEST--
Closure::__invoke() is case insensitive
--FILE--
<?php

$inc = function(&$n) {
    $n++;
};

$n = 1;
$ref_n = &$n;
$inc->__INVOKE($ref_n);
var_dump($n);

?>
--EXPECT--
int(2)
