--TEST--
using different variables to access null offsets
--FILE--
<?php

$null = NULL;

var_dump($null[1]);
var_dump($null[0.0836]);
var_dump($null[NULL]);
var_dump($null["run away"]);

var_dump($null[TRUE]);
var_dump($null[FALSE]);

$fp = fopen('/proc/self/comm', "r");
var_dump($null[$fp]);

$obj = new stdClass;
var_dump($null[$obj]);

$arr = Array(1,2,3);
var_dump($null[$arr]);

echo "Done\n";
?>
--EXPECTF--
NULL
NULL
NULL
NULL
NULL
NULL
NULL
NULL
NULL
Done
