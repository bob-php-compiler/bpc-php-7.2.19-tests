--TEST--
define() tests
--FILE--
<?php

var_dump(define("TRUE", 1, array(1)));

?>
--EXPECTF--
Parse error: %s in %s on line %d
