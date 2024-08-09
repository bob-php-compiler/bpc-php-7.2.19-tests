--TEST--
bpc_is_callable_num_args typehints tests
--FILE--
<?php

class N {}

class E {}

echo "--required + optional--\n";

class C
{
    function hi($a, $b, $c, $n, $d = 1, $e = null) {}
    function hello(int $a, $b, C $c, ?N $n, int $d = 1, E $e = null) {}
}


function hi($a, $b, $c, $n, $d = 1, $e = null) {}
function hello(int $a, $b, C $c, ?N $n, int $d = 1, E $e = null) {}

$hi = function ($a, $b, $c, $n, $d = 1, $e = null) {};
$hello = function (int $a, $b, C $c, ?N $n, int $d = 1, E $e = null) {};

var_dump(bpc_is_callable_num_args(['C', 'hi']));
var_dump(bpc_is_callable_num_args(['C', 'hello']));

var_dump(bpc_is_callable_num_args('hi'));
var_dump(bpc_is_callable_num_args('hello'));

var_dump(bpc_is_callable_num_args($hi));
var_dump(bpc_is_callable_num_args($hello));

echo "--required--\n";

class C2
{
    function hi($a, $b, $c, $n) {}
    function hello(int $a, $b, C $c, ?N $n) {}
}


function hi2($a, $b, $c, $n) {}
function hello2(int $a, $b, C $c, ?N $n) {}

$hi2 = function ($a, $b, $c, $n) {};
$hello2 = function (int $a, $b, C $c, ?N $n) {};

var_dump(bpc_is_callable_num_args(['C2', 'hi']));
var_dump(bpc_is_callable_num_args(['C2', 'hello']));

var_dump(bpc_is_callable_num_args('hi2'));
var_dump(bpc_is_callable_num_args('hello2'));

var_dump(bpc_is_callable_num_args($hi2));
var_dump(bpc_is_callable_num_args($hello2));

echo "--empty--\n";

class C3
{
    function hi() {}
}


function hi3() {}

$hi3 = function () {};

var_dump(bpc_is_callable_num_args(['C3', 'hi']));

var_dump(bpc_is_callable_num_args('hi3'));

var_dump(bpc_is_callable_num_args($hi3));

echo "--closure use--\n";

$var1 = 1;
$var2 = 2;

var_dump(bpc_is_callable_num_args(function (int $a, $b, C $c, ?N $n) use ($var1, $var2) {}));
var_dump(bpc_is_callable_num_args(function () use ($var1, $var2) {}));

?>
--EXPECT--
--required + optional--
array(3) {
  ["min"]=>
  int(4)
  ["max"]=>
  int(6)
  ["typehints"]=>
  array(6) {
    [0]=>
    NULL
    [1]=>
    NULL
    [2]=>
    NULL
    [3]=>
    NULL
    [4]=>
    NULL
    [5]=>
    NULL
  }
}
array(3) {
  ["min"]=>
  int(4)
  ["max"]=>
  int(6)
  ["typehints"]=>
  array(6) {
    [0]=>
    string(3) "int"
    [1]=>
    NULL
    [2]=>
    string(1) "C"
    [3]=>
    string(1) "N"
    [4]=>
    string(3) "int"
    [5]=>
    string(1) "E"
  }
}
array(3) {
  ["min"]=>
  int(4)
  ["max"]=>
  int(6)
  ["typehints"]=>
  array(6) {
    [0]=>
    NULL
    [1]=>
    NULL
    [2]=>
    NULL
    [3]=>
    NULL
    [4]=>
    NULL
    [5]=>
    NULL
  }
}
array(3) {
  ["min"]=>
  int(4)
  ["max"]=>
  int(6)
  ["typehints"]=>
  array(6) {
    [0]=>
    string(3) "int"
    [1]=>
    NULL
    [2]=>
    string(1) "C"
    [3]=>
    string(1) "N"
    [4]=>
    string(3) "int"
    [5]=>
    string(1) "E"
  }
}
array(3) {
  ["min"]=>
  int(4)
  ["max"]=>
  int(6)
  ["typehints"]=>
  array(6) {
    [0]=>
    NULL
    [1]=>
    NULL
    [2]=>
    NULL
    [3]=>
    NULL
    [4]=>
    NULL
    [5]=>
    NULL
  }
}
array(3) {
  ["min"]=>
  int(4)
  ["max"]=>
  int(6)
  ["typehints"]=>
  array(6) {
    [0]=>
    string(3) "int"
    [1]=>
    NULL
    [2]=>
    string(1) "C"
    [3]=>
    string(1) "N"
    [4]=>
    string(3) "int"
    [5]=>
    string(1) "E"
  }
}
--required--
array(3) {
  ["min"]=>
  int(4)
  ["max"]=>
  int(4)
  ["typehints"]=>
  array(4) {
    [0]=>
    NULL
    [1]=>
    NULL
    [2]=>
    NULL
    [3]=>
    NULL
  }
}
array(3) {
  ["min"]=>
  int(4)
  ["max"]=>
  int(4)
  ["typehints"]=>
  array(4) {
    [0]=>
    string(3) "int"
    [1]=>
    NULL
    [2]=>
    string(1) "C"
    [3]=>
    string(1) "N"
  }
}
array(3) {
  ["min"]=>
  int(4)
  ["max"]=>
  int(4)
  ["typehints"]=>
  array(4) {
    [0]=>
    NULL
    [1]=>
    NULL
    [2]=>
    NULL
    [3]=>
    NULL
  }
}
array(3) {
  ["min"]=>
  int(4)
  ["max"]=>
  int(4)
  ["typehints"]=>
  array(4) {
    [0]=>
    string(3) "int"
    [1]=>
    NULL
    [2]=>
    string(1) "C"
    [3]=>
    string(1) "N"
  }
}
array(3) {
  ["min"]=>
  int(4)
  ["max"]=>
  int(4)
  ["typehints"]=>
  array(4) {
    [0]=>
    NULL
    [1]=>
    NULL
    [2]=>
    NULL
    [3]=>
    NULL
  }
}
array(3) {
  ["min"]=>
  int(4)
  ["max"]=>
  int(4)
  ["typehints"]=>
  array(4) {
    [0]=>
    string(3) "int"
    [1]=>
    NULL
    [2]=>
    string(1) "C"
    [3]=>
    string(1) "N"
  }
}
--empty--
array(3) {
  ["min"]=>
  int(0)
  ["max"]=>
  int(0)
  ["typehints"]=>
  array(0) {
  }
}
array(3) {
  ["min"]=>
  int(0)
  ["max"]=>
  int(0)
  ["typehints"]=>
  array(0) {
  }
}
array(3) {
  ["min"]=>
  int(0)
  ["max"]=>
  int(0)
  ["typehints"]=>
  array(0) {
  }
}
--closure use--
array(3) {
  ["min"]=>
  int(4)
  ["max"]=>
  int(4)
  ["typehints"]=>
  array(4) {
    [0]=>
    string(3) "int"
    [1]=>
    NULL
    [2]=>
    string(1) "C"
    [3]=>
    string(1) "N"
  }
}
array(3) {
  ["min"]=>
  int(0)
  ["max"]=>
  int(0)
  ["typehints"]=>
  array(0) {
  }
}
