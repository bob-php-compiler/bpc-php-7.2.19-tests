--TEST--
define() tests
--FILE--
<?php

var_dump(define("TRUE", 1));

var_dump(define(" ", 1));
var_dump(define("[[[", 2));
var_dump(define("test const", 3));
var_dump(define("test const", 3));
var_dump(define("test", array(1)));
var_dump(define("test1", new stdclass));

var_dump(constant(" "));
var_dump(constant("[[["));
var_dump(constant("test const"));

echo "Done\n";
?>
--EXPECTF--
bool(true)
bool(true)
bool(true)
bool(true)

Notice: Constant test const already defined in %s on line %d
bool(false)
bool(true)

Warning: Constants may only evaluate to scalar values or arrays in %s on line %d
bool(false)
int(1)
int(2)
int(3)
Done
