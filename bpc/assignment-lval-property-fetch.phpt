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

echo "==hash-lookup-nested-key==\n";
$l = array();
$o = new stdClass;
$l[$o->x][1] = 1;
$l[1][$o->x] = 2;
$l[2][$o->x][1] = 3;
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

    public function test4()
    {
        echo "==hash-lookup-nested-key==\n";
        $l = array();
        $l[$this->x][1] = 1;
        $l[1][$this->x] = 2;
        $l[2][$this->x][1] = 3;
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
$o = new A;
$o->test4();

$o = new B;
$o->test1();
$o = new B;
$o->test2();
$o = new B;
$o->test3();
$o = new B;
$o->test4();

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

    public function test4()
    {
        echo "==hash-lookup-nested-key==\n";
        $l = array();
        $l[$this->x][1] = 1;
        $l[1][$this->x] = 2;
        $l[2][$this->x][1] = 3;
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
$o = new C;
$o->test4();

$o = new D;
$o->test1();
$o = new D;
$o->test2();
$o = new D;
$o->test3();
$o = new D;
$o->test4();

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
==hash-lookup-nested-key==

Notice: Undefined property: stdClass::$x in %s on line 23

Notice: Undefined property: stdClass::$x in %s on line 24

Notice: Undefined property: stdClass::$x in %s on line 25
array(3) {
  [""]=>
  array(1) {
    [1]=>
    int(1)
  }
  [1]=>
  array(1) {
    [""]=>
    int(2)
  }
  [2]=>
  array(1) {
    [""]=>
    array(1) {
      [1]=>
      int(3)
    }
  }
}
object(stdClass)#%d (0) {
}
==hash-lookup-key==

Notice: Undefined property: A::$x in %s on line 34
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

Notice: Undefined property: A::$x in %s on line 49
array(1) {
  [""]=>
  int(1)
}
object(A)#%d (0) {
}
==hash-lookup-nested-key==

Notice: Undefined property: A::$x in %s on line 57

Notice: Undefined property: A::$x in %s on line 58

Notice: Undefined property: A::$x in %s on line 59
array(3) {
  [""]=>
  array(1) {
    [1]=>
    int(1)
  }
  [1]=>
  array(1) {
    [""]=>
    int(2)
  }
  [2]=>
  array(1) {
    [""]=>
    array(1) {
      [1]=>
      int(3)
    }
  }
}
object(A)#%d (0) {
}
==hash-lookup-key==

Notice: Undefined property: B::$x in %s on line 34
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

Notice: Undefined property: B::$x in %s on line 49
array(1) {
  [""]=>
  int(1)
}
object(B)#%d (0) {
}
==hash-lookup-nested-key==

Notice: Undefined property: B::$x in %s on line 57

Notice: Undefined property: B::$x in %s on line 58

Notice: Undefined property: B::$x in %s on line 59
array(3) {
  [""]=>
  array(1) {
    [1]=>
    int(1)
  }
  [1]=>
  array(1) {
    [""]=>
    int(2)
  }
  [2]=>
  array(1) {
    [""]=>
    array(1) {
      [1]=>
      int(3)
    }
  }
}
object(B)#%d (0) {
}
==hash-lookup-key==

Notice: Undefined property: C::$x in %s on line 89
array(1) {
  [""]=>
  int(1)
}
object(C)#%d (0) {
}
==hash-lookup-hash==

Notice: Undefined property: C::$x in %s on line 89

Notice: Indirect modification of overloaded property C::$x has no effect in %s on line 103
object(C)#%d (0) {
}
==hash-lookup-key==

Notice: Undefined property: C::$x in %s on line 89
array(1) {
  [""]=>
  int(1)
}
object(C)#%d (0) {
}
==hash-lookup-nested-key==

Notice: Undefined property: C::$x in %s on line 89

Notice: Undefined property: C::$x in %s on line 89

Notice: Undefined property: C::$x in %s on line 89
array(3) {
  [""]=>
  array(1) {
    [1]=>
    int(1)
  }
  [1]=>
  array(1) {
    [""]=>
    int(2)
  }
  [2]=>
  array(1) {
    [""]=>
    array(1) {
      [1]=>
      int(3)
    }
  }
}
object(C)#%d (0) {
}
==hash-lookup-key==

Notice: Undefined property: D::$x in %s on line 89
array(1) {
  [""]=>
  int(1)
}
object(D)#%d (0) {
}
==hash-lookup-hash==

Notice: Undefined property: D::$x in %s on line 89

Notice: Indirect modification of overloaded property D::$x has no effect in %s on line 103
object(D)#%d (0) {
}
==hash-lookup-key==

Notice: Undefined property: D::$x in %s on line 89
array(1) {
  [""]=>
  int(1)
}
object(D)#%d (0) {
}
==hash-lookup-nested-key==

Notice: Undefined property: D::$x in %s on line 89

Notice: Undefined property: D::$x in %s on line 89

Notice: Undefined property: D::$x in %s on line 89
array(3) {
  [""]=>
  array(1) {
    [1]=>
    int(1)
  }
  [1]=>
  array(1) {
    [""]=>
    int(2)
  }
  [2]=>
  array(1) {
    [""]=>
    array(1) {
      [1]=>
      int(3)
    }
  }
}
object(D)#%d (0) {
}
