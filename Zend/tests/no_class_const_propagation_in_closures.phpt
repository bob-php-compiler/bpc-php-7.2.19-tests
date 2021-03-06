--TEST--
self:: class constants should not be propagated into closures, due to scope rebinding
--FILE--
<?php

class A {
    const C = 'A::C';

    public function f() {
        return function() {
            return self::C;
        };
    }
}

//class B {
//    const C = 'B::C';
//}

$f = (new A)->f();
//var_dump($f->bindTo(null, 'B')());
var_dump($f());

?>
--EXPECT--
string(4) "A::C"
