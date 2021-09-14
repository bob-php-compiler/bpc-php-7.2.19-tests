--TEST--
define() tests
--FILE--
<?php

var_dump(define(array(1,2,3,4,5), 1));

?>
--EXPECTF--
Warning: define() expects parameter 1 to be string, array given in %s on line %d
NULL
