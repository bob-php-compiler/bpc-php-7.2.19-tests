--TEST--
?: operator
--FILE--
<?php
var_dump(true ? true : false);
var_dump(false ? false : true);
var_dump(23 ? 23 : 42);
var_dump(0 ? 0 : "bar");

$a = 23;
$b = 0;
$c = "";
$d = 23.5;

var_dump($a ? $a : $b);
var_dump($c ? $c : $d);

var_dump(1 ? 1 : print(2));

$e = array();

$e['e'] = 'e';
$e['e'] = $e['e'] ? $e['e'] : 'e';
print_r($e);
?>
--EXPECT--
bool(true)
bool(true)
int(23)
string(3) "bar"
int(23)
float(23.5)
int(1)
Array
(
    [e] => e
)
