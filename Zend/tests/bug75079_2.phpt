--TEST--
Bug #75079 variation without traits
--FILE--
<?php

class Foo
{
    private static $bar = 123;

    static function test(){
        return function(){
            return function(){
                return Foo::$bar;
            };
        };
    }
}


$f = Foo::test();

var_dump(($f())());
?>
--EXPECTF--
int(123)
