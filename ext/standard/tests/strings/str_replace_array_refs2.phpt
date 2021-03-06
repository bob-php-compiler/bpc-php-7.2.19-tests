--TEST--
Test str_replace() function and array refs, more cases
--FILE--
<?php
$closure = function (array $array, array $keys, $value)
{
    $current = &$array;
    foreach ($keys as $key)
        $current = &$current[$key];
    $current = $value;
    return $array;
};

class SomeClass { public $prop; }

$obj = new SomeClass;
$obj->prop = array('x' => 'property');
$obj->prop = $closure($obj->prop, array('x'), 'a');
var_dump(str_replace(array_keys($obj->prop), $obj->prop, "x property"));

$array = array('x' => 'property');
$array = $closure($array, array('x'), 'a');
var_dump(str_replace(array_keys($array), $array, "x property"));
--EXPECTF--
string(10) "a property"
string(10) "a property"
