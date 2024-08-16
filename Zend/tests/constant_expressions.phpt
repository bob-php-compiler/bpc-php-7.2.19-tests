--TEST--
Constant Expressions
--FILE--
<?php
define('T_1', 1 << 1);
define('T_2', 1 / 2);
define('T_3', 1.5 + 1.5);
define('T_4', "foo" . "bar");
define('T_5', (1.5 + 1.5) * 2);
define('T_6', "foo" . 2 . 3 . 4.0);
define('T_7', __LINE__);
define('T_8', <<<ENDOFSTRING
This is a test string
ENDOFSTRING
);
define('T_9', ~-1);
define('T_10', (-1?:1) + (0?2:3));
define('T_11', 1 && 0);
define('T_12', 1 and 1);
define('T_13', 0 || 0);
define('T_14', 1 or 0);
define('T_15', 1 xor 1);
define('T_16', 1 xor 0);
define('T_17', 1 < 0);
define('T_18', 0 <= 0);
define('T_19', 1 > 0);
define('T_20', 1 >= 0);
define('T_21', 1 === 1);
define('T_22', 1 !== 1);
define('T_23', 0 != "0");
define('T_24', 1 == "1");

// Test order of operations
define('T_25', 1 + 2 * 3);

// Test for memory leaks
define('T_26', "1" + 2 + "3");

// Allow T_POW
define('T_27', 2 ** 3);

var_dump(T_1);
var_dump(T_2);
var_dump(T_3);
var_dump(T_4);
var_dump(T_5);
var_dump(T_6);
var_dump(T_7);
var_dump(T_8);
var_dump(T_9);
var_dump(T_10);
var_dump(T_11);
var_dump(T_12);
var_dump(T_13);
var_dump(T_14);
var_dump(T_15);
var_dump(T_16);
var_dump(T_17);
var_dump(T_18);
var_dump(T_19);
var_dump(T_20);
var_dump(T_21);
var_dump(T_22);
var_dump(T_23);
var_dump(T_24);
var_dump(T_25);
var_dump(T_26);
var_dump(T_27);
?>
--EXPECT--
int(2)
float(0.5)
float(3)
string(6) "foobar"
float(6)
string(6) "foo234"
int(8)
string(21) "This is a test string"
int(0)
int(2)
bool(false)
bool(true)
bool(false)
bool(true)
bool(false)
bool(true)
bool(false)
bool(true)
bool(true)
bool(true)
bool(true)
bool(false)
bool(false)
bool(true)
int(7)
int(6)
int(8)
