--TEST--
Closure cannot use one variable twice
--FILE--
<?php

$a = 1;
$fn = function() use ($a, &$a) {
    $a = 2;
};
$fn();
var_dump($a);

?>
--EXPECTF--
Parse error: Redefinition of parameter $a in %s on line %d
