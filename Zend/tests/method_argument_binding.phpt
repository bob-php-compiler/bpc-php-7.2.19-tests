--TEST--
Edge cases in compile-time method argument binding
--FILE--
<?php

class A {
    private function method($x) {}
}

class B extends A {
    public function test() {
        $x = 1;
        $this->method($x);
        var_dump($x);
    }
}

class C extends B {
    public function method(&$x) {
        ++$x;
    }
}

(new C)->test();

class D {
    private final function method(&$x) {
        ++$x;
    }
}

class E extends D {
    public function __call($name, $args) {
        var_dump($name, $args);
    }

    public function test() {
        $this->method($x);
    }
}

(new E)->test();

?>
--EXPECTF--
int(2)
string(6) "method"
array(1) {
  [0]=>
  NULL
}
