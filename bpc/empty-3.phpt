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
        if ($name == 'p') {
            return new A;
        }
    }
}

var_dump(empty((new A)->{f()}->{g()}));
var_dump(empty((new A)->p->q));

?>
--EXPECTF--
__construct
f
g
__isset(f)
__get(f)
bool(true)
__construct
__isset(p)
__get(p)
__construct
__isset(q)
__get(q)
bool(true)
