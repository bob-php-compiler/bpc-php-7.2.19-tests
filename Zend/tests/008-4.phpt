--TEST--
define() tests
--FILE--
<?php

var_dump(define(array(1,2,3,4,5), 1));

?>
--EXPECTF--
Parse error: %s in %s on line %d
