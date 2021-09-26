--TEST--
assigning tests
--FILE--
<?php

$arr = array(
    'null'         => null,
    'false'        => false,
    'empty string' => ''
);

foreach ($arr as $k => $v) {
    echo "==$k postcrement==\n";

    $a = $v;
    var_dump($a->p[0]++);
    var_dump($a);

    $a = $v;
    var_dump($a->p[0]--);
    var_dump($a);

    echo "==$k precrement==\n";

    $a = $v;
    var_dump(++$a->p[0]);
    var_dump($a);

    $a = $v;
    var_dump(--$a->p[0]);
    var_dump($a);

    echo "==$k assigning-string-cat==\n";

    $a = $v;
    var_dump($a->p[0] .= 'A');
    var_dump($a);

    echo "==$k assigning-arithmetic-op==\n";

    $a = $v;
    var_dump($a->p[0] += 2);
    var_dump($a);

    $a = $v;
    var_dump($a->p[0] -= 2);
    var_dump($a);

    $a = $v;
    var_dump($a->p[0] *= 2);
    var_dump($a);

    $a = $v;
    var_dump($a->p[0] /= 2);
    var_dump($a);

    $a = $v;
    var_dump($a->p[0] %= 2);
    var_dump($a);

    $a = $v;
    var_dump($a->p[0] **= 2);
    var_dump($a);

    $a = $v;
    var_dump($a->p[0] <<= 2);
    var_dump($a);

    $a = $v;
    var_dump($a->p[0] |= 2);
    var_dump($a);

    $a = $v;
    var_dump($a->p[0] ^= 2);
    var_dump($a);

    $a = $v;
    var_dump($a->p[0] &= 2);
    var_dump($a);
}
?>
--EXPECTF--
==null postcrement==

Notice: Undefined property: stdClass::$p in %s on line 13

Notice: Undefined offset: 0 in %s on line 13
NULL
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(1)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 17

Notice: Undefined offset: 0 in %s on line 17
NULL
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    NULL
  }
}
==null precrement==

Notice: Undefined property: stdClass::$p in %s on line 23

Notice: Undefined offset: 0 in %s on line 23
int(1)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(1)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 27

Notice: Undefined offset: 0 in %s on line 27
NULL
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    NULL
  }
}
==null assigning-string-cat==

Notice: Undefined property: stdClass::$p in %s on line 33

Notice: Undefined offset: 0 in %s on line 33
string(1) "A"
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    string(1) "A"
  }
}
==null assigning-arithmetic-op==

Notice: Undefined property: stdClass::$p in %s on line 39

Notice: Undefined offset: 0 in %s on line 39
int(2)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(2)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 43

Notice: Undefined offset: 0 in %s on line 43
int(-2)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(-2)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 47

Notice: Undefined offset: 0 in %s on line 47
int(0)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(0)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 51

Notice: Undefined offset: 0 in %s on line 51
int(0)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(0)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 55

Notice: Undefined offset: 0 in %s on line 55
int(0)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(0)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 59

Notice: Undefined offset: 0 in %s on line 59
int(0)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(0)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 63

Notice: Undefined offset: 0 in %s on line 63
int(0)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(0)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 67

Notice: Undefined offset: 0 in %s on line 67
int(2)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(2)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 71

Notice: Undefined offset: 0 in %s on line 71
int(2)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(2)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 75

Notice: Undefined offset: 0 in %s on line 75
int(0)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(0)
  }
}
==false postcrement==

Notice: Undefined property: stdClass::$p in %s on line 13

Notice: Undefined offset: 0 in %s on line 13
NULL
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(1)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 17

Notice: Undefined offset: 0 in %s on line 17
NULL
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    NULL
  }
}
==false precrement==

Notice: Undefined property: stdClass::$p in %s on line 23

Notice: Undefined offset: 0 in %s on line 23
int(1)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(1)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 27

Notice: Undefined offset: 0 in %s on line 27
NULL
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    NULL
  }
}
==false assigning-string-cat==

Notice: Undefined property: stdClass::$p in %s on line 33

Notice: Undefined offset: 0 in %s on line 33
string(1) "A"
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    string(1) "A"
  }
}
==false assigning-arithmetic-op==

Notice: Undefined property: stdClass::$p in %s on line 39

Notice: Undefined offset: 0 in %s on line 39
int(2)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(2)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 43

Notice: Undefined offset: 0 in %s on line 43
int(-2)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(-2)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 47

Notice: Undefined offset: 0 in %s on line 47
int(0)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(0)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 51

Notice: Undefined offset: 0 in %s on line 51
int(0)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(0)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 55

Notice: Undefined offset: 0 in %s on line 55
int(0)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(0)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 59

Notice: Undefined offset: 0 in %s on line 59
int(0)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(0)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 63

Notice: Undefined offset: 0 in %s on line 63
int(0)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(0)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 67

Notice: Undefined offset: 0 in %s on line 67
int(2)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(2)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 71

Notice: Undefined offset: 0 in %s on line 71
int(2)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(2)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 75

Notice: Undefined offset: 0 in %s on line 75
int(0)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(0)
  }
}
==empty string postcrement==

Notice: Undefined property: stdClass::$p in %s on line 13

Notice: Undefined offset: 0 in %s on line 13
NULL
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(1)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 17

Notice: Undefined offset: 0 in %s on line 17
NULL
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    NULL
  }
}
==empty string precrement==

Notice: Undefined property: stdClass::$p in %s on line 23

Notice: Undefined offset: 0 in %s on line 23
int(1)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(1)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 27

Notice: Undefined offset: 0 in %s on line 27
NULL
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    NULL
  }
}
==empty string assigning-string-cat==

Notice: Undefined property: stdClass::$p in %s on line 33

Notice: Undefined offset: 0 in %s on line 33
string(1) "A"
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    string(1) "A"
  }
}
==empty string assigning-arithmetic-op==

Notice: Undefined property: stdClass::$p in %s on line 39

Notice: Undefined offset: 0 in %s on line 39
int(2)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(2)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 43

Notice: Undefined offset: 0 in %s on line 43
int(-2)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(-2)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 47

Notice: Undefined offset: 0 in %s on line 47
int(0)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(0)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 51

Notice: Undefined offset: 0 in %s on line 51
int(0)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(0)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 55

Notice: Undefined offset: 0 in %s on line 55
int(0)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(0)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 59

Notice: Undefined offset: 0 in %s on line 59
int(0)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(0)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 63

Notice: Undefined offset: 0 in %s on line 63
int(0)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(0)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 67

Notice: Undefined offset: 0 in %s on line 67
int(2)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(2)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 71

Notice: Undefined offset: 0 in %s on line 71
int(2)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(2)
  }
}

Notice: Undefined property: stdClass::$p in %s on line 75

Notice: Undefined offset: 0 in %s on line 75
int(0)
object(stdClass)#%d (1) {
  ["p"]=>
  array(1) {
    [0]=>
    int(0)
  }
}
