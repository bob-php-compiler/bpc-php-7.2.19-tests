--TEST--
ZE2 Callbacks of static functions
--FILE--
<?php
class A {
    public static function who() {
        echo "A\n";
    }
    public static function who2() {
        echo "A\n";
    }
}

class B extends A {
    public static function who() {
        echo "B\n";
    }
}

class C extends B {
    public function call($cb) {
        echo join('|', $cb) . "\n";
        call_user_func($cb);
    }
    public function test() {
        $this->call(array('parent', 'who'));
        $this->call(array('B', 'who'));
        $this->call(array('A', 'who'));
        $this->call(array('D', 'who'));
        $this->call(array('A', 'who'));
        $this->call(array('C', 'who'));
        $this->call(array('B', 'who2'));
    }
}

class D {
    public static function who() {
        echo "D\n";
    }
}

class E extends D {
    public static function who() {
        echo "E\n";
    }
}

$o = new C;
$o->test();

class O {
    public function who() {
        echo "O\n";
    }
}

class P extends O {
    function __toString() {
        return '$this';
    }
    public function who() {
        echo "P\n";
    }
    public function call($cb) {
        echo join('|', $cb) . "\n";
        call_user_func($cb);
    }
    public function test() {
        $this->call(array('parent', 'who'));
        $this->call(array('O', 'who'));
        $this->call(array($this, 'parent::who'));
        $this->call(array($this, 'B::who'));
    }
}

echo "===FOREIGN===\n";

$o = new P;
$o->test();

?>
===DONE===
--EXPECTF--
parent|who
B
B|who
B
A|who
A
D|who
D
A|who
A
C|who
B
B|who2
A
===FOREIGN===
parent|who
O
O|who
O
$this|parent::who
O
$this|B::who

Warning: call_user_func() expects parameter 1 to be callable, P::B::who given in %s on line %d
===DONE===
