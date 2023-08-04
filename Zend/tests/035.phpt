--TEST--
Using 'static' and 'global' in global scope
--FILE--
<?php

global $var, $var, $var;
var_dump($var);

var_dump($GLOBALS['var']);

?>
--EXPECTF--
NULL
NULL
