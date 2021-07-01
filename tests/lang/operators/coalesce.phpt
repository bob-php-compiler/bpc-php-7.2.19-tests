--TEST--
Test ?? operator
--FILE--
<?php

$var = 7;
$var2 = NULL;

$obj = new StdClass;
$obj->boo = 7;

$arr = array(
	2 => 7,
	"foo" => "bar",
	"foobar" => NULL,
	"qux" => $obj,
	"bing" => array(
		"bang"
	)
);

function foobar() {
	echo "called\n";
	return array('a');
}

var_dump(isset($nonexistent_variable) ? $nonexistent_variable : 3);
echo PHP_EOL;
var_dump(isset($var) ? $var : 3);
var_dump(isset($var2) ? $var2 : 3);
echo PHP_EOL;
var_dump(isset($obj->boo) ? $obj->boo : 3);
var_dump(isset($obj->bing) ? $obj->bing : 3);
var_dump(isset($arr["qux"]->boo) ? $arr["qux"]->boo : 3);
var_dump(isset($arr["qux"]->bing) ? $arr["qux"]->bing : 3);
echo PHP_EOL;
var_dump(isset($arr[2]) ? $arr[2] : 3);
var_dump(isset($arr["foo"]) ? $arr["foo"] : 3);
var_dump(isset($arr["foobar"]) ? $arr["foobar"] : 3);
var_dump(isset($arr["qux"]) ? $arr["qux"] : 3);
var_dump(isset($arr["bing"][0]) ? $arr["bing"][0] : 3);
var_dump(isset($arr["bing"][1]) ? $arr["bing"][0] : 3);
echo PHP_EOL;
$foobar_0 = foobar()[0];
var_dump(isset($foobar_0) ? $foobar_0 : false);
echo PHP_EOL;
function f($x)
{
    printf("%s(%d)\n", __FUNCTION__, $x);
    return $x;
}

$f_null = f(null);
$f_1    = f(1);
$a = isset($f_null) ? $f_null
                    : isset($f_1) ? $f_1
                                  : f(2);
?>
--EXPECTF--
int(3)

int(7)
int(3)

int(7)
int(3)
int(7)
int(3)

int(7)
string(3) "bar"
int(3)
object(stdClass)#%d (%d) {
  ["boo"]=>
  int(7)
}
string(4) "bang"
int(3)

called
string(1) "a"

f(0)
f(1)
