--TEST--
Dynamic Constant Expressions
--FILE--
<?php

define('C_0', 0);
define('C_1', 1);
define('C_foo', "foo");
define('C_arr', [0 => 0, "foo" => "foo"]);

define('T_1', C_1 | 2);
define('T_2', C_1 . "foo");
define('T_3', C_1 > 1);
define('T_4', C_1 >= 1);
define('T_5', -C_1);
define('T_6', +C_1);
define('T_7', +C_foo);
define('T_8', !C_1);
define('T_9', C_0 || 0);
define('T_10', C_1 || 0);
define('T_11', C_0 && 1);
define('T_12', C_1 && 1);
define('T_13', C_0 ? "foo" : "bar");
define('T_14', C_1 ? "foo" : "bar");
define('T_15', C_0 ?: "bar");
define('T_16', C_1 ?: "bar");
define('T_17', C_arr[0]);
define('T_18', C_arr["foo"]);
define('T_19', [
    C_0,
    "foo" => "foo",
    42 => 42,
    3.14 => 3.14,
    null => null,
    false => false,
    true => true,
]);
define('T_20x', 'a');
define('T_20', null ?: (T_20x . 'bc'));

var_dump(
    T_1, T_2, T_3, T_4, T_5, T_6, T_7, T_8, T_9, T_10,
    T_11, T_12, T_13, T_14, T_15, T_16, T_17, T_18, T_19, T_20
);

?>
--EXPECTF--
Warning: A non-numeric value encountered in %s on line %d
int(3)
string(4) "1foo"
bool(false)
bool(true)
int(-1)
int(1)
int(0)
bool(false)
bool(false)
bool(true)
bool(false)
bool(true)
string(3) "bar"
string(3) "foo"
string(3) "bar"
int(1)
int(0)
string(3) "foo"
array(6) {
  [0]=>
  bool(false)
  ["foo"]=>
  string(3) "foo"
  [42]=>
  int(42)
  [3]=>
  float(3.14)
  [""]=>
  NULL
  [1]=>
  bool(true)
}
string(3) "abc"
