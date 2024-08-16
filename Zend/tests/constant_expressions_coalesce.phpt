--TEST--
Constant expressions with null coalescing operator ??
--ARGS--
--bpc-include-file Zend/tests/constant_expressions_coalesce.inc \
--FILE--
<?php

define('A', [1 => [[]]]);

define('T_1', null ?? A[1]['undefined']['index'] ?? 1);
define('T_2', null ?? A['undefined']['index'] ?? 2);
define('T_3', null ?? A[1][0][2] ?? 3);
define('T_4', A[1][0][2] ?? 4);
define('T_5', null ?? __LINE__);
define('T_6', __LINE__ ?? "bar");

var_dump(T_1);
var_dump(T_2);
var_dump(T_3);
var_dump(T_4);
var_dump(T_5);
var_dump(T_6);

var_dump((function(){ static $var = null ?? A[1]['undefined']['index'] ?? 1; return $var; })());
var_dump((function(){ static $var = null ?? A['undefined']['index'] ?? 2; return $var; })());
var_dump((function(){ static $var = null ?? A[1][0][2] ?? 3; return $var; })());
var_dump((function(){ static $var = A[1][0][2] ?? 4; return $var; })());

include 'constant_expressions_coalesce.inc';

var_dump((new C1)->var);
var_dump((new C2)->var);
var_dump((new C3)->var);
var_dump((new C4)->var);

?>
--EXPECTF--
int(1)
int(2)
int(3)
int(4)
int(%d)
int(%d)
int(1)
int(2)
int(3)
int(4)
int(1)
int(2)
int(3)
int(4)
