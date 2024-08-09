--TEST--
bpc_is_callable_num_args basic tests
--FILE--
<?php

echo "not_exist_function\n";
var_dump(bpc_is_callable_num_args("not_exist_function"));
echo "not_exist_class\n";
var_dump(bpc_is_callable_num_args(array("not_exist_class", "not_exist_method")));
echo "not_exist_method\n";
var_dump(bpc_is_callable_num_args(array("Exception", "not_exist_method")));

echo "object not_exist_method\n";
$e = new Exception;
var_dump(bpc_is_callable_num_args(array($e, "not_exist_method")));

echo "strlen\n";
var_dump(bpc_is_callable_num_args("strlen"));
echo "var_dump\n";
var_dump(bpc_is_callable_num_args("var_dump"));

echo "test\n";
function test($a, $b, $c = null, ...$args) {}
var_dump(bpc_is_callable_num_args("test"));

class C1
{
    static function test1($a, $b, $c = null, $d = null) {}
    static function test2($a, $b, $c = null, ...$args) {}
}

echo "C1::test1\n";
var_dump(bpc_is_callable_num_args(array('C1', 'test1')));
echo "C1::test2\n";
var_dump(bpc_is_callable_num_args(array('C1', 'test2')));

class C2
{
    function test1($a, $b, $c = null, $d = null) {}
    function test2($a, $b, $c = null, ...$args) {}
    function __invoke($a, $b, $c = null) {}
}

$o = new C2;
echo "C2::test1\n";
var_dump(bpc_is_callable_num_args(array($o, 'test1')));
echo "C2::test2\n";
var_dump(bpc_is_callable_num_args(array($o, 'test2')));
echo "C2::__invoke\n";
var_dump(bpc_is_callable_num_args($o));

echo "closure\n";
var_dump(bpc_is_callable_num_args(function () {}));
var_dump(bpc_is_callable_num_args(function ($a, $b, $c = null) {}));
var_dump(bpc_is_callable_num_args(function ($a, $b, $c = null, ...$args) {}));
var_dump(bpc_is_callable_num_args(function ($a, $b, $c = null) use ($o) {}));

?>
--EXPECT--
not_exist_function
bool(false)
not_exist_class
bool(false)
not_exist_method
bool(false)
object not_exist_method
bool(false)
strlen
array(3) {
  ["min"]=>
  int(1)
  ["max"]=>
  int(1)
  ["typehints"]=>
  array(1) {
    [0]=>
    NULL
  }
}
var_dump
array(3) {
  ["min"]=>
  int(1)
  ["max"]=>
  int(-1)
  ["typehints"]=>
  array(1) {
    [0]=>
    NULL
  }
}
test
array(3) {
  ["min"]=>
  int(2)
  ["max"]=>
  int(-1)
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
C1::test1
array(3) {
  ["min"]=>
  int(2)
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
C1::test2
array(3) {
  ["min"]=>
  int(2)
  ["max"]=>
  int(-1)
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
C2::test1
array(3) {
  ["min"]=>
  int(2)
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
C2::test2
array(3) {
  ["min"]=>
  int(2)
  ["max"]=>
  int(-1)
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
C2::__invoke
array(3) {
  ["min"]=>
  int(2)
  ["max"]=>
  int(3)
  ["typehints"]=>
  array(3) {
    [0]=>
    NULL
    [1]=>
    NULL
    [2]=>
    NULL
  }
}
closure
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
  int(2)
  ["max"]=>
  int(3)
  ["typehints"]=>
  array(3) {
    [0]=>
    NULL
    [1]=>
    NULL
    [2]=>
    NULL
  }
}
array(3) {
  ["min"]=>
  int(2)
  ["max"]=>
  int(-1)
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
  int(2)
  ["max"]=>
  int(3)
  ["typehints"]=>
  array(3) {
    [0]=>
    NULL
    [1]=>
    NULL
    [2]=>
    NULL
  }
}
