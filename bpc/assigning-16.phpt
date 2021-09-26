--TEST--
assigning tests
--FILE--
<?php

$arr = array(
    'array' => array(),
    'null'  => null,
    'false' => false
);

foreach ($arr as $k => $v) {
    echo "==$k postcrement==\n";

    $a = $v;
    var_dump($a[]->p++);
    var_dump($a);

    $a = $v;
    var_dump($a[]->p--);
    var_dump($a);

    echo "==$k precrement==\n";

    $a = $v;
    var_dump(++$a[]->p);
    var_dump($a);

    $a = $v;
    var_dump(--$a[]->p);
    var_dump($a);

    echo "==$k assigning-string-cat==\n";

    $a = $v;
    var_dump($a[]->p .= 'A');
    var_dump($a);

    echo "==$k assigning-arithmetic-op==\n";

    $a = $v;
    var_dump($a[]->p += 2);
    var_dump($a);

    $a = $v;
    var_dump($a[]->p -= 2);
    var_dump($a);

    $a = $v;
    var_dump($a[]->p *= 2);
    var_dump($a);

    $a = $v;
    var_dump($a[]->p /= 2);
    var_dump($a);

    $a = $v;
    var_dump($a[]->p %= 2);
    var_dump($a);

    $a = $v;
    var_dump($a[]->p **= 2);
    var_dump($a);

    $a = $v;
    var_dump($a[]->p <<= 2);
    var_dump($a);

    $a = $v;
    var_dump($a[]->p |= 2);
    var_dump($a);

    $a = $v;
    var_dump($a[]->p ^= 2);
    var_dump($a);

    $a = $v;
    var_dump($a[]->p &= 2);
    var_dump($a);
}
?>
--EXPECTF--
==array postcrement==

Warning: Creating default object from empty value in %s on line 13

Notice: Undefined property: stdClass::$p in %s on line 13
NULL
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(1)
  }
}

Warning: Creating default object from empty value in %s on line 17

Notice: Undefined property: stdClass::$p in %s on line 17
NULL
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    NULL
  }
}
==array precrement==

Warning: Creating default object from empty value in %s on line 23

Notice: Undefined property: stdClass::$p in %s on line 23
int(1)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(1)
  }
}

Warning: Creating default object from empty value in %s on line 27

Notice: Undefined property: stdClass::$p in %s on line 27
NULL
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    NULL
  }
}
==array assigning-string-cat==

Warning: Creating default object from empty value in %s on line 33

Notice: Undefined property: stdClass::$p in %s on line 33
string(1) "A"
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    string(1) "A"
  }
}
==array assigning-arithmetic-op==

Warning: Creating default object from empty value in %s on line 39

Notice: Undefined property: stdClass::$p in %s on line 39
int(2)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(2)
  }
}

Warning: Creating default object from empty value in %s on line 43

Notice: Undefined property: stdClass::$p in %s on line 43
int(-2)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(-2)
  }
}

Warning: Creating default object from empty value in %s on line 47

Notice: Undefined property: stdClass::$p in %s on line 47
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 51

Notice: Undefined property: stdClass::$p in %s on line 51
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 55

Notice: Undefined property: stdClass::$p in %s on line 55
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 59

Notice: Undefined property: stdClass::$p in %s on line 59
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 63

Notice: Undefined property: stdClass::$p in %s on line 63
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 67

Notice: Undefined property: stdClass::$p in %s on line 67
int(2)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(2)
  }
}

Warning: Creating default object from empty value in %s on line 71

Notice: Undefined property: stdClass::$p in %s on line 71
int(2)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(2)
  }
}

Warning: Creating default object from empty value in %s on line 75

Notice: Undefined property: stdClass::$p in %s on line 75
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}
==null postcrement==

Warning: Creating default object from empty value in %s on line 13

Notice: Undefined property: stdClass::$p in %s on line 13
NULL
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(1)
  }
}

Warning: Creating default object from empty value in %s on line 17

Notice: Undefined property: stdClass::$p in %s on line 17
NULL
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    NULL
  }
}
==null precrement==

Warning: Creating default object from empty value in %s on line 23

Notice: Undefined property: stdClass::$p in %s on line 23
int(1)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(1)
  }
}

Warning: Creating default object from empty value in %s on line 27

Notice: Undefined property: stdClass::$p in %s on line 27
NULL
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    NULL
  }
}
==null assigning-string-cat==

Warning: Creating default object from empty value in %s on line 33

Notice: Undefined property: stdClass::$p in %s on line 33
string(1) "A"
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    string(1) "A"
  }
}
==null assigning-arithmetic-op==

Warning: Creating default object from empty value in %s on line 39

Notice: Undefined property: stdClass::$p in %s on line 39
int(2)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(2)
  }
}

Warning: Creating default object from empty value in %s on line 43

Notice: Undefined property: stdClass::$p in %s on line 43
int(-2)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(-2)
  }
}

Warning: Creating default object from empty value in %s on line 47

Notice: Undefined property: stdClass::$p in %s on line 47
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 51

Notice: Undefined property: stdClass::$p in %s on line 51
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 55

Notice: Undefined property: stdClass::$p in %s on line 55
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 59

Notice: Undefined property: stdClass::$p in %s on line 59
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 63

Notice: Undefined property: stdClass::$p in %s on line 63
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 67

Notice: Undefined property: stdClass::$p in %s on line 67
int(2)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(2)
  }
}

Warning: Creating default object from empty value in %s on line 71

Notice: Undefined property: stdClass::$p in %s on line 71
int(2)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(2)
  }
}

Warning: Creating default object from empty value in %s on line 75

Notice: Undefined property: stdClass::$p in %s on line 75
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}
==false postcrement==

Warning: Creating default object from empty value in %s on line 13

Notice: Undefined property: stdClass::$p in %s on line 13
NULL
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(1)
  }
}

Warning: Creating default object from empty value in %s on line 17

Notice: Undefined property: stdClass::$p in %s on line 17
NULL
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    NULL
  }
}
==false precrement==

Warning: Creating default object from empty value in %s on line 23

Notice: Undefined property: stdClass::$p in %s on line 23
int(1)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(1)
  }
}

Warning: Creating default object from empty value in %s on line 27

Notice: Undefined property: stdClass::$p in %s on line 27
NULL
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    NULL
  }
}
==false assigning-string-cat==

Warning: Creating default object from empty value in %s on line 33

Notice: Undefined property: stdClass::$p in %s on line 33
string(1) "A"
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    string(1) "A"
  }
}
==false assigning-arithmetic-op==

Warning: Creating default object from empty value in %s on line 39

Notice: Undefined property: stdClass::$p in %s on line 39
int(2)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(2)
  }
}

Warning: Creating default object from empty value in %s on line 43

Notice: Undefined property: stdClass::$p in %s on line 43
int(-2)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(-2)
  }
}

Warning: Creating default object from empty value in %s on line 47

Notice: Undefined property: stdClass::$p in %s on line 47
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 51

Notice: Undefined property: stdClass::$p in %s on line 51
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 55

Notice: Undefined property: stdClass::$p in %s on line 55
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 59

Notice: Undefined property: stdClass::$p in %s on line 59
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 63

Notice: Undefined property: stdClass::$p in %s on line 63
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 67

Notice: Undefined property: stdClass::$p in %s on line 67
int(2)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(2)
  }
}

Warning: Creating default object from empty value in %s on line 71

Notice: Undefined property: stdClass::$p in %s on line 71
int(2)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(2)
  }
}

Warning: Creating default object from empty value in %s on line 75

Notice: Undefined property: stdClass::$p in %s on line 75
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}
