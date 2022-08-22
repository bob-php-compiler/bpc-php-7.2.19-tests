--TEST--
assignment-lval-property-fetch
--FILE--
<?php

echo "==hash-lookup-key==\n";
$l = array();
$o = new stdClass;
$l[$o->x] = 1;
var_dump($l, $o);

echo "==hash-lookup-hash==\n";
$o = new stdClass;
$o->x[1] = 1;
var_dump($o);

echo "==hash-lookup-key==\n";
$l = array();
$o = new stdClass;
$l[$o->x[1]] = 1;
var_dump($l, $o);

class A
{
    public function test1()
    {
        echo "==hash-lookup-key==\n";
        $l = array();
        $l[$this->x] = 1;
        var_dump($l, $this);
    }

    public function test2()
    {
        echo "==hash-lookup-hash==\n";
        $this->x[1] = 1;
        var_dump($this);
    }

    public function test3()
    {
        echo "==hash-lookup-key==\n";
        $l = array();
        $l[$this->x[1]] = 1;
        var_dump($l, $this);
    }
}

class B extends A
{}

$o = new A;
$o->test1();
$o = new A;
$o->test2();
$o = new A;
$o->test3();

$o = new B;
$o->test1();
$o = new B;
$o->test2();
$o = new B;

class C
{
    public function __get($name)
    {
        return $this->$name;
    }

    public function test1()
    {
        echo "==hash-lookup-key==\n";
        $l = array();
        $l[$this->x] = 1;
        var_dump($l, $this);
    }

    public function test2()
    {
        echo "==hash-lookup-hash==\n";
        $this->x[1] = 1;
        var_dump($this);
    }

    public function test3()
    {
        echo "==hash-lookup-key==\n";
        $l = array();
        $l[$this->x[1]] = 1;
        var_dump($l, $this);
    }
}

class D extends C
{}

$o = new C;
$o->test1();
$o = new C;
$o->test2();
$o = new C;
$o->test3();

$o = new D;
$o->test1();
$o = new D;
$o->test2();
$o = new D;
$o->test3();

?>
--EXPECTF--
==hash-lookup-key==

Notice: Undefined property: stdClass::$x in %s on line 6
array(1) {
  [""]=>
  int(1)
}
object(stdClass)#%d (0) {
}
==hash-lookup-hash==
object(stdClass)#%d (1) {
  ["x"]=>
  array(1) {
    [1]=>
    int(1)
  }
}
==hash-lookup-key==

Notice: Undefined property: stdClass::$x in %s on line 17
array(1) {
  [""]=>
  int(1)
}
object(stdClass)#%d (0) {
}
==hash-lookup-key==

Notice: Undefined property: A::$x in %s on line 26
array(1) {
  [""]=>
  int(1)
}
object(A)#%d (0) {
}
==hash-lookup-hash==
object(A)#%d (1) {
  ["x"]=>
  array(1) {
    [1]=>
    int(1)
  }
}
==hash-lookup-key==

Notice: Undefined property: A::$x in %s on line 41
array(1) {
  [""]=>
  int(1)
}
object(A)#%d (0) {
}
==hash-lookup-key==

Notice: Undefined property: B::$x in %s on line 26
array(1) {
  [""]=>
  int(1)
}
object(B)#%d (0) {
}
==hash-lookup-hash==
object(B)#%d (1) {
  ["x"]=>
  array(1) {
    [1]=>
    int(1)
  }
}
==hash-lookup-key==

Notice: Undefined property: C::$x in %s on line 66
array(1) {
  [""]=>
  int(1)
}
object(C)#%d (0) {
}
==hash-lookup-hash==

Notice: Undefined property: C::$x in %s on line 66

Notice: Indirect modification of overloaded property C::$x has no effect in %s on line 80
object(C)#%d (0) {
}
==hash-lookup-key==

Notice: Undefined property: C::$x in %s on line 66
array(1) {
  [""]=>
  int(1)
}
object(C)#%d (0) {
}
==hash-lookup-key==

Notice: Undefined property: D::$x in %s on line 66
array(1) {
  [""]=>
  int(1)
}
object(D)#%d (0) {
}
==hash-lookup-hash==

Notice: Undefined property: D::$x in %s on line 66

Notice: Indirect modification of overloaded property D::$x has no effect in %s on line 80
object(D)#%d (0) {
}
==hash-lookup-key==

Notice: Undefined property: D::$x in %s on line 66
array(1) {
  [""]=>
  int(1)
}
object(D)#%d (0) {
}
