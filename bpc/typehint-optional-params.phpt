--TEST--
typehint optional params
--ARGS--
--bpc-include-file bpc/typehint-optional-params.inc \
--FILE--
<?php

function i(int $arg1 = -1, int $arg2 = +2, int $arg3 = - 1, int $arg4 = + 2)
{
    var_dump($arg1, $arg2, $arg3, $arg4);
}

function f(float $arg1 = -1.1, float $arg2 = +2.2, float $arg3 = - 1.1, float $arg4 = + 2.2)
{
    var_dump($arg1, $arg2, $arg3, $arg4);
}

i();
f();

define('ENV', 'dev');

include __DIR__ . '/typehint-optional-params.inc';

?>
--EXPECT--
int(-1)
int(2)
int(-1)
int(2)
float(-1.1)
float(2.2)
float(-1.1)
float(2.2)
string(3) "dev"
int(1)
bool(true)
float(1.1)
string(5) "hello"
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
string(6) "strlen"
string(3) "dev"
int(1)
bool(true)
float(1.1)
string(5) "hello"
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
string(6) "strlen"
