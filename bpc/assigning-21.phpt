--TEST--
assigning tests
--FILE--
<?php

$arr = array(
    'null'  => null,
    'false' => false
);

foreach ($arr as $k => $v) {
    echo "==$k postcrement==\n";

    $a = $v;
    var_dump($a[0]->p++);
    var_dump($a);

    $a = $v;
    var_dump($a[0]->p--);
    var_dump($a);

    echo "==$k precrement==\n";

    $a = $v;
    var_dump(++$a[0]->p);
    var_dump($a);

    $a = $v;
    var_dump(--$a[0]->p);
    var_dump($a);

    echo "==$k assigning-string-cat==\n";

    $a = $v;
    var_dump($a[0]->p .= 'A');
    var_dump($a);

    echo "==$k assigning-arithmetic-op==\n";

    $a = $v;
    var_dump($a[0]->p += 2);
    var_dump($a);

    $a = $v;
    var_dump($a[0]->p -= 2);
    var_dump($a);

    $a = $v;
    var_dump($a[0]->p *= 2);
    var_dump($a);

    $a = $v;
    var_dump($a[0]->p /= 2);
    var_dump($a);

    $a = $v;
    var_dump($a[0]->p %= 2);
    var_dump($a);

    $a = $v;
    var_dump($a[0]->p **= 2);
    var_dump($a);

    $a = $v;
    var_dump($a[0]->p <<= 2);
    var_dump($a);

    $a = $v;
    var_dump($a[0]->p |= 2);
    var_dump($a);

    $a = $v;
    var_dump($a[0]->p ^= 2);
    var_dump($a);

    $a = $v;
    var_dump($a[0]->p &= 2);
    var_dump($a);
}
?>
--EXPECTF--
==null postcrement==

Notice: Undefined offset: 0 in %s on line 12

Warning: Creating default object from empty value in %s on line 12

Notice: Undefined property: stdClass::$p in %s on line 12
NULL
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(1)
  }
}

Notice: Undefined offset: 0 in %s on line 16

Warning: Creating default object from empty value in %s on line 16

Notice: Undefined property: stdClass::$p in %s on line 16
NULL
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    NULL
  }
}
==null precrement==

Notice: Undefined offset: 0 in %s on line 22

Warning: Creating default object from empty value in %s on line 22

Notice: Undefined property: stdClass::$p in %s on line 22
int(1)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(1)
  }
}

Notice: Undefined offset: 0 in %s on line 26

Warning: Creating default object from empty value in %s on line 26

Notice: Undefined property: stdClass::$p in %s on line 26
NULL
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    NULL
  }
}
==null assigning-string-cat==

Notice: Undefined offset: 0 in %s on line 32

Warning: Creating default object from empty value in %s on line 32

Notice: Undefined property: stdClass::$p in %s on line 32
string(1) "A"
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    string(1) "A"
  }
}
==null assigning-arithmetic-op==

Notice: Undefined offset: 0 in %s on line 38

Warning: Creating default object from empty value in %s on line 38

Notice: Undefined property: stdClass::$p in %s on line 38
int(2)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(2)
  }
}

Notice: Undefined offset: 0 in %s on line 42

Warning: Creating default object from empty value in %s on line 42

Notice: Undefined property: stdClass::$p in %s on line 42
int(-2)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(-2)
  }
}

Notice: Undefined offset: 0 in %s on line 46

Warning: Creating default object from empty value in %s on line 46

Notice: Undefined property: stdClass::$p in %s on line 46
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Notice: Undefined offset: 0 in %s on line 50

Warning: Creating default object from empty value in %s on line 50

Notice: Undefined property: stdClass::$p in %s on line 50
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Notice: Undefined offset: 0 in %s on line 54

Warning: Creating default object from empty value in %s on line 54

Notice: Undefined property: stdClass::$p in %s on line 54
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Notice: Undefined offset: 0 in %s on line 58

Warning: Creating default object from empty value in %s on line 58

Notice: Undefined property: stdClass::$p in %s on line 58
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Notice: Undefined offset: 0 in %s on line 62

Warning: Creating default object from empty value in %s on line 62

Notice: Undefined property: stdClass::$p in %s on line 62
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Notice: Undefined offset: 0 in %s on line 66

Warning: Creating default object from empty value in %s on line 66

Notice: Undefined property: stdClass::$p in %s on line 66
int(2)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(2)
  }
}

Notice: Undefined offset: 0 in %s on line 70

Warning: Creating default object from empty value in %s on line 70

Notice: Undefined property: stdClass::$p in %s on line 70
int(2)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(2)
  }
}

Notice: Undefined offset: 0 in %s on line 74

Warning: Creating default object from empty value in %s on line 74

Notice: Undefined property: stdClass::$p in %s on line 74
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}
==false postcrement==

Notice: Undefined offset: 0 in %s on line 12

Warning: Creating default object from empty value in %s on line 12

Notice: Undefined property: stdClass::$p in %s on line 12
NULL
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(1)
  }
}

Notice: Undefined offset: 0 in %s on line 16

Warning: Creating default object from empty value in %s on line 16

Notice: Undefined property: stdClass::$p in %s on line 16
NULL
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    NULL
  }
}
==false precrement==

Notice: Undefined offset: 0 in %s on line 22

Warning: Creating default object from empty value in %s on line 22

Notice: Undefined property: stdClass::$p in %s on line 22
int(1)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(1)
  }
}

Notice: Undefined offset: 0 in %s on line 26

Warning: Creating default object from empty value in %s on line 26

Notice: Undefined property: stdClass::$p in %s on line 26
NULL
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    NULL
  }
}
==false assigning-string-cat==

Notice: Undefined offset: 0 in %s on line 32

Warning: Creating default object from empty value in %s on line 32

Notice: Undefined property: stdClass::$p in %s on line 32
string(1) "A"
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    string(1) "A"
  }
}
==false assigning-arithmetic-op==

Notice: Undefined offset: 0 in %s on line 38

Warning: Creating default object from empty value in %s on line 38

Notice: Undefined property: stdClass::$p in %s on line 38
int(2)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(2)
  }
}

Notice: Undefined offset: 0 in %s on line 42

Warning: Creating default object from empty value in %s on line 42

Notice: Undefined property: stdClass::$p in %s on line 42
int(-2)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(-2)
  }
}

Notice: Undefined offset: 0 in %s on line 46

Warning: Creating default object from empty value in %s on line 46

Notice: Undefined property: stdClass::$p in %s on line 46
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Notice: Undefined offset: 0 in %s on line 50

Warning: Creating default object from empty value in %s on line 50

Notice: Undefined property: stdClass::$p in %s on line 50
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Notice: Undefined offset: 0 in %s on line 54

Warning: Creating default object from empty value in %s on line 54

Notice: Undefined property: stdClass::$p in %s on line 54
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Notice: Undefined offset: 0 in %s on line 58

Warning: Creating default object from empty value in %s on line 58

Notice: Undefined property: stdClass::$p in %s on line 58
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Notice: Undefined offset: 0 in %s on line 62

Warning: Creating default object from empty value in %s on line 62

Notice: Undefined property: stdClass::$p in %s on line 62
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Notice: Undefined offset: 0 in %s on line 66

Warning: Creating default object from empty value in %s on line 66

Notice: Undefined property: stdClass::$p in %s on line 66
int(2)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(2)
  }
}

Notice: Undefined offset: 0 in %s on line 70

Warning: Creating default object from empty value in %s on line 70

Notice: Undefined property: stdClass::$p in %s on line 70
int(2)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(2)
  }
}

Notice: Undefined offset: 0 in %s on line 74

Warning: Creating default object from empty value in %s on line 74

Notice: Undefined property: stdClass::$p in %s on line 74
int(0)
array(1) {
  [0]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}
