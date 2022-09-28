--TEST--
assigning tests
--FILE--
<?php

function k()
{
    echo "k\n";
    // bigloo type inference known `return 'k';` return string
    // bpc not, so when k() as hash key, bpc generate
    //  (if (php-resource? key)
    //      (resource-id key)
    //      key)
    // then bigloo report
    //  Type error --  "struct" expected, "bstring" provided
    $k = 'k';
    return $k;
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
        } else if ($name == 'q') {
            return new A;
        }
    }
}

$int = 1;
var_dump(isset($int->foo[0]));
// php: eval (new A) and k() first, then property-fetch
// bpc: eval k() first, then property-fetch
var_dump(isset((new A)->foo[k()]));
var_dump(isset((new A)->arr[k()]));
var_dump(isset((new A)->arr['k']));

var_dump(isset((new A)->foo->bar[0]));
var_dump(isset((new A)->q->arr[0]));

?>
--EXPECTF--
bool(false)
k
__construct
__isset(foo)
__get(foo)
bool(false)
k
__construct
__isset(arr)
__get(arr)
bool(false)
__construct
__isset(arr)
__get(arr)
bool(false)
__construct
__isset(foo)
__get(foo)
bool(false)
__construct
__isset(q)
__get(q)
__construct
__isset(arr)
__get(arr)
bool(false)
