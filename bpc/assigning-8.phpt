--TEST--
assigning tests
--FILE--
<?php

class A
{
    public $p;

    public function __construct()
    {
        $this->p = new stdclass;
    }
}

echo "==postcrement==\n";

$a = new A;
var_dump($a->p->q[0]++);
var_dump($a);

$a = new A;
var_dump($a->p->q[0]--);
var_dump($a);

echo "==precrement==\n";

$a = new A;
var_dump(++$a->p->q[0]);
var_dump($a);

$a = new A;
var_dump(--$a->p->q[0]);
var_dump($a);

echo "==assigning-string-cat==\n";

$a = new A;
var_dump($a->p->q[0] .= 'A');
var_dump($a);

echo "==assigning-arithmetic-op==\n";

$a = new A;
var_dump($a->p->q[0] += 2);
var_dump($a);

$a = new A;
var_dump($a->p->q[0] -= 2);
var_dump($a);

$a = new A;
var_dump($a->p->q[0] *= 2);
var_dump($a);

$a = new A;
var_dump($a->p->q[0] /= 2);
var_dump($a);

$a = new A;
var_dump($a->p->q[0] %= 2);
var_dump($a);

$a = new A;
var_dump($a->p->q[0] **= 2);
var_dump($a);

$a = new A;
var_dump($a->p->q[0] <<= 2);
var_dump($a);

$a = new A;
var_dump($a->p->q[0] |= 2);
var_dump($a);

$a = new A;
var_dump($a->p->q[0] ^= 2);
var_dump($a);

$a = new A;
var_dump($a->p->q[0] &= 2);
var_dump($a);

?>
--EXPECTF--
==postcrement==

Notice: Undefined property: stdClass::$q in %s on line 16

Notice: Undefined offset: 0 in %s on line 16
NULL
object(A)#%d (1) {
  ["p"]=>
  object(stdClass)#%d (1) {
    ["q"]=>
    array(1) {
      [0]=>
      int(1)
    }
  }
}

Notice: Undefined property: stdClass::$q in %s on line 20

Notice: Undefined offset: 0 in %s on line 20
NULL
object(A)#%d (1) {
  ["p"]=>
  object(stdClass)#%d (1) {
    ["q"]=>
    array(1) {
      [0]=>
      NULL
    }
  }
}
==precrement==

Notice: Undefined property: stdClass::$q in %s on line 26

Notice: Undefined offset: 0 in %s on line 26
int(1)
object(A)#%d (1) {
  ["p"]=>
  object(stdClass)#%d (1) {
    ["q"]=>
    array(1) {
      [0]=>
      int(1)
    }
  }
}

Notice: Undefined property: stdClass::$q in %s on line 30

Notice: Undefined offset: 0 in %s on line 30
NULL
object(A)#%d (1) {
  ["p"]=>
  object(stdClass)#%d (1) {
    ["q"]=>
    array(1) {
      [0]=>
      NULL
    }
  }
}
==assigning-string-cat==

Notice: Undefined property: stdClass::$q in %s on line 36

Notice: Undefined offset: 0 in %s on line 36
string(1) "A"
object(A)#%d (1) {
  ["p"]=>
  object(stdClass)#%d (1) {
    ["q"]=>
    array(1) {
      [0]=>
      string(1) "A"
    }
  }
}
==assigning-arithmetic-op==

Notice: Undefined property: stdClass::$q in %s on line 42

Notice: Undefined offset: 0 in %s on line 42
int(2)
object(A)#%d (1) {
  ["p"]=>
  object(stdClass)#%d (1) {
    ["q"]=>
    array(1) {
      [0]=>
      int(2)
    }
  }
}

Notice: Undefined property: stdClass::$q in %s on line 46

Notice: Undefined offset: 0 in %s on line 46
int(-2)
object(A)#%d (1) {
  ["p"]=>
  object(stdClass)#%d (1) {
    ["q"]=>
    array(1) {
      [0]=>
      int(-2)
    }
  }
}

Notice: Undefined property: stdClass::$q in %s on line 50

Notice: Undefined offset: 0 in %s on line 50
int(0)
object(A)#%d (1) {
  ["p"]=>
  object(stdClass)#%d (1) {
    ["q"]=>
    array(1) {
      [0]=>
      int(0)
    }
  }
}

Notice: Undefined property: stdClass::$q in %s on line 54

Notice: Undefined offset: 0 in %s on line 54
int(0)
object(A)#%d (1) {
  ["p"]=>
  object(stdClass)#%d (1) {
    ["q"]=>
    array(1) {
      [0]=>
      int(0)
    }
  }
}

Notice: Undefined property: stdClass::$q in %s on line 58

Notice: Undefined offset: 0 in %s on line 58
int(0)
object(A)#%d (1) {
  ["p"]=>
  object(stdClass)#%d (1) {
    ["q"]=>
    array(1) {
      [0]=>
      int(0)
    }
  }
}

Notice: Undefined property: stdClass::$q in %s on line 62

Notice: Undefined offset: 0 in %s on line 62
int(0)
object(A)#%d (1) {
  ["p"]=>
  object(stdClass)#%d (1) {
    ["q"]=>
    array(1) {
      [0]=>
      int(0)
    }
  }
}

Notice: Undefined property: stdClass::$q in %s on line 66

Notice: Undefined offset: 0 in %s on line 66
int(0)
object(A)#%d (1) {
  ["p"]=>
  object(stdClass)#%d (1) {
    ["q"]=>
    array(1) {
      [0]=>
      int(0)
    }
  }
}

Notice: Undefined property: stdClass::$q in %s on line 70

Notice: Undefined offset: 0 in %s on line 70
int(2)
object(A)#%d (1) {
  ["p"]=>
  object(stdClass)#%d (1) {
    ["q"]=>
    array(1) {
      [0]=>
      int(2)
    }
  }
}

Notice: Undefined property: stdClass::$q in %s on line 74

Notice: Undefined offset: 0 in %s on line 74
int(2)
object(A)#%d (1) {
  ["p"]=>
  object(stdClass)#%d (1) {
    ["q"]=>
    array(1) {
      [0]=>
      int(2)
    }
  }
}

Notice: Undefined property: stdClass::$q in %s on line 78

Notice: Undefined offset: 0 in %s on line 78
int(0)
object(A)#%d (1) {
  ["p"]=>
  object(stdClass)#%d (1) {
    ["q"]=>
    array(1) {
      [0]=>
      int(0)
    }
  }
}
