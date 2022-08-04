--TEST--
class method func_get_args() tests
--FILE--
<?php

class A
{
    function __construct()
    {
        echo "args\n";
        var_dump(func_get_args());
    }
}

echo "==A==\n";
new A('arg1', 'arg2', 'arg3');

class B
{
    function __construct($options)
    {
        if (func_num_args() > 1) {
            echo "args\n";
            var_dump(func_get_args());
        } else {
            echo "options\n";
            var_dump($options);
        }
    }
}

echo "==B==\n";
new B(array('option' => 'value'));
new B('arg1', 'arg2', 'arg3');

class C
{
    function __construct($options = array())
    {
        if (func_num_args() > 1) {
            echo "args\n";
            var_dump(func_get_args());
        } else {
            echo "options\n";
            var_dump($options);
        }
    }
}

new C(array('option' => 'value'));
new C('arg1', 'arg2', 'arg3');

?>
--EXPECT--
==A==
args
array(3) {
  [0]=>
  string(4) "arg1"
  [1]=>
  string(4) "arg2"
  [2]=>
  string(4) "arg3"
}
==B==
options
array(1) {
  ["option"]=>
  string(5) "value"
}
args
array(3) {
  [0]=>
  string(4) "arg1"
  [1]=>
  string(4) "arg2"
  [2]=>
  string(4) "arg3"
}
options
array(1) {
  ["option"]=>
  string(5) "value"
}
args
array(3) {
  [0]=>
  string(4) "arg1"
  [1]=>
  string(4) "arg2"
  [2]=>
  string(4) "arg3"
}
