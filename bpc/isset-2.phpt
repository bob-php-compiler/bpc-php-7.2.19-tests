--TEST--
assigning tests
--FILE--
<?php

class A
{
    public function __construct()
    {
        echo "__construct\n";
    }
}

var_dump(isset((new A)->foo));

?>
--EXPECTF--
__construct
bool(false)
