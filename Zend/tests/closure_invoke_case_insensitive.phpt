--TEST--
Closure::__invoke() is case insensitive
--FILE--
<?php

$inc = function($n) {
    return ++$n;
};

$n = 1;
$n = $inc->__INVOKE($n);
var_dump($n);

?>
--EXPECT--
int(2)
