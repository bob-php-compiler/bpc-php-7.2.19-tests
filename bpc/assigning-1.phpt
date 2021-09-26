--TEST--
assigning tests
--FILE--
<?php

echo "==postcrement==\n";

$a = new stdclass;
var_dump($a->p[0]++);
var_dump($a);

$a = new stdclass;
var_dump($a->p[0]--);
var_dump($a);

echo "==precrement==\n";

$a = new stdclass;
var_dump(++$a->p[0]);
var_dump($a);

$a = new stdclass;
var_dump(--$a->p[0]);
var_dump($a);

echo "==assigning-string-cat==\n";

$a = new stdclass;
var_dump($a->p[0] .= 'A');
var_dump($a);

echo "==assigning-arithmetic-op==\n";

$a = new stdclass;
var_dump($a->p[0] += 2);
var_dump($a);

$a = new stdclass;
var_dump($a->p[0] -= 2);
var_dump($a);

$a = new stdclass;
var_dump($a->p[0] *= 2);
var_dump($a);

$a = new stdclass;
var_dump($a->p[0] /= 2);
var_dump($a);

$a = new stdclass;
var_dump($a->p[0] %= 2);
var_dump($a);

$a = new stdclass;
var_dump($a->p[0] **= 2);
var_dump($a);

$a = new stdclass;
var_dump($a->p[0] <<= 2);
var_dump($a);

$a = new stdclass;
var_dump($a->p[0] |= 2);
var_dump($a);

$a = new stdclass;
var_dump($a->p[0] ^= 2);
var_dump($a);

$a = new stdclass;
var_dump($a->p[0] &= 2);
var_dump($a);

?>
--EXPECTF--
==postcrement==

Notice: Undefined property: stdClass::$p in %s on line 6

Notice: Undefined offset: 0 in %s on line 6
NULL
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(1)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 10

Notice: Undefined offset: 0 in %s on line 10
NULL
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    NULL
  }
}
==precrement==

Notice: Undefined property: stdClass::$p in %s on line 16

Notice: Undefined offset: 0 in %s on line 16
int(1)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(1)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 20

Notice: Undefined offset: 0 in %s on line 20
NULL
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    NULL
  }
}
==assigning-string-cat==

Notice: Undefined property: stdClass::$p in %s on line 26

Notice: Undefined offset: 0 in %s on line 26
string(1) "A"
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    string(1) "A"
  }
}
==assigning-arithmetic-op==

Notice: Undefined property: stdClass::$p in %s on line 32

Notice: Undefined offset: 0 in %s on line 32
int(2)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(2)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 36

Notice: Undefined offset: 0 in %s on line 36
int(-2)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(-2)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 40

Notice: Undefined offset: 0 in %s on line 40
int(0)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(0)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 44

Notice: Undefined offset: 0 in %s on line 44
int(0)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(0)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 48

Notice: Undefined offset: 0 in %s on line 48
int(0)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(0)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 52

Notice: Undefined offset: 0 in %s on line 52
int(0)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(0)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 56

Notice: Undefined offset: 0 in %s on line 56
int(0)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(0)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 60

Notice: Undefined offset: 0 in %s on line 60
int(2)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(2)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 64

Notice: Undefined offset: 0 in %s on line 64
int(2)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(2)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 68

Notice: Undefined offset: 0 in %s on line 68
int(0)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(0)
  }
}
