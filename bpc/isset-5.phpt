--TEST--
assigning tests
--FILE--
<?php

function f()
{
    echo "f\n";
    return 'f';
}

function g()
{
    echo "g\n";
    return 'g';
}

class A
{
    public function __construct()
    {
        echo "__construct\n";
    }

    public function __isset($name)
    {
        echo "__isset($name)\n";
        return true;
    }

    public function __get($name)
    {
        echo "__get($name)\n";
        if ($name == 'arr') {
            return array();
        } else if ($name == 'arr2') {
            return array('f' => array());
        } else if ($name == 'q') {
            return new A;
        }
    }
}

$int = 1;
var_dump(isset($int->foo[0][0]));
// php: eval (new A) and f() g() first, then property-fetch
// bpc: eval f() g() first, then property-fetch
var_dump(isset((new A)->foo[f()][g()]));
var_dump(isset((new A)->arr[f()][g()]));
var_dump(isset((new A)->arr2['f']['g']));

var_dump(isset((new A)->foo->bar[0][0]));
var_dump(isset((new A)->q->arr2['f']['g']));

?>
--EXPECTF--
bool(false)
f
g
__construct
__isset(foo)
__get(foo)
bool(false)
f
g
__construct
__isset(arr)
__get(arr)
bool(false)
__construct
__isset(arr2)
__get(arr2)
bool(false)
__construct
__isset(foo)
__get(foo)
bool(false)
__construct
__isset(q)
__get(q)
__construct
__isset(arr2)
__get(arr2)
bool(false)
