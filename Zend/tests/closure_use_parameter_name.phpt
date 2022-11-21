--TEST--
Can't use name of lexical variable for parameter
--FILE--
<?php

$a = 1;
$fn = function ($a) use ($a) {
    var_dump($a);
};
$fn(2);

?>
--EXPECTF--
Parse error: Redefinition of parameter $a in %s on line %d
