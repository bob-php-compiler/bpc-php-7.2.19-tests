--TEST--
assigning tests
--FILE--
<?php

$arr = array(
    'null'         => null,
    'false'        => false,
    'empty_string' => ''
);

foreach ($arr as $k => $v) {
    echo "==postcrement==\n";

    $a = array($k => $v);
    var_dump($a[$k]->p++);
    var_dump($a);

    $a = array($k => $v);
    var_dump($a[$k]->p--);
    var_dump($a);

    echo "==precrement==\n";

    $a = array($k => $v);
    var_dump(++$a[$k]->p);
    var_dump($a);

    $a = array($k => $v);
    var_dump(--$a[$k]->p);
    var_dump($a);

    echo "==assigning-string-cat==\n";

    $a = array($k => $v);
    var_dump($a[$k]->p .= 'A');
    var_dump($a);

    echo "==assigning-arithmetic-op==\n";

    $a = array($k => $v);
    var_dump($a[$k]->p += 2);
    var_dump($a);

    $a = array($k => $v);
    var_dump($a[$k]->p -= 2);
    var_dump($a);

    $a = array($k => $v);
    var_dump($a[$k]->p *= 2);
    var_dump($a);

    $a = array($k => $v);
    var_dump($a[$k]->p /= 2);
    var_dump($a);

    $a = array($k => $v);
    var_dump($a[$k]->p %= 2);
    var_dump($a);

    $a = array($k => $v);
    var_dump($a[$k]->p **= 2);
    var_dump($a);

    $a = array($k => $v);
    var_dump($a[$k]->p <<= 2);
    var_dump($a);

    $a = array($k => $v);
    var_dump($a[$k]->p |= 2);
    var_dump($a);

    $a = array($k => $v);
    var_dump($a[$k]->p ^= 2);
    var_dump($a);

    $a = array($k => $v);
    var_dump($a[$k]->p &= 2);
    var_dump($a);
}
?>
--EXPECTF--
==postcrement==

Warning: Creating default object from empty value in %s on line 13

Notice: Undefined property: stdClass::$p in %s on line 13
NULL
array(1) {
  ["null"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(1)
  }
}

Warning: Creating default object from empty value in %s on line 17

Notice: Undefined property: stdClass::$p in %s on line 17
NULL
array(1) {
  ["null"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    NULL
  }
}
==precrement==

Warning: Creating default object from empty value in %s on line 23

Notice: Undefined property: stdClass::$p in %s on line 23
int(1)
array(1) {
  ["null"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(1)
  }
}

Warning: Creating default object from empty value in %s on line 27

Notice: Undefined property: stdClass::$p in %s on line 27
NULL
array(1) {
  ["null"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    NULL
  }
}
==assigning-string-cat==

Warning: Creating default object from empty value in %s on line 33

Notice: Undefined property: stdClass::$p in %s on line 33
string(1) "A"
array(1) {
  ["null"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    string(1) "A"
  }
}
==assigning-arithmetic-op==

Warning: Creating default object from empty value in %s on line 39

Notice: Undefined property: stdClass::$p in %s on line 39
int(2)
array(1) {
  ["null"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(2)
  }
}

Warning: Creating default object from empty value in %s on line 43

Notice: Undefined property: stdClass::$p in %s on line 43
int(-2)
array(1) {
  ["null"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(-2)
  }
}

Warning: Creating default object from empty value in %s on line 47

Notice: Undefined property: stdClass::$p in %s on line 47
int(0)
array(1) {
  ["null"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 51

Notice: Undefined property: stdClass::$p in %s on line 51
int(0)
array(1) {
  ["null"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 55

Notice: Undefined property: stdClass::$p in %s on line 55
int(0)
array(1) {
  ["null"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 59

Notice: Undefined property: stdClass::$p in %s on line 59
int(0)
array(1) {
  ["null"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 63

Notice: Undefined property: stdClass::$p in %s on line 63
int(0)
array(1) {
  ["null"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 67

Notice: Undefined property: stdClass::$p in %s on line 67
int(2)
array(1) {
  ["null"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(2)
  }
}

Warning: Creating default object from empty value in %s on line 71

Notice: Undefined property: stdClass::$p in %s on line 71
int(2)
array(1) {
  ["null"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(2)
  }
}

Warning: Creating default object from empty value in %s on line 75

Notice: Undefined property: stdClass::$p in %s on line 75
int(0)
array(1) {
  ["null"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}
==postcrement==

Warning: Creating default object from empty value in %s on line 13

Notice: Undefined property: stdClass::$p in %s on line 13
NULL
array(1) {
  ["false"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(1)
  }
}

Warning: Creating default object from empty value in %s on line 17

Notice: Undefined property: stdClass::$p in %s on line 17
NULL
array(1) {
  ["false"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    NULL
  }
}
==precrement==

Warning: Creating default object from empty value in %s on line 23

Notice: Undefined property: stdClass::$p in %s on line 23
int(1)
array(1) {
  ["false"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(1)
  }
}

Warning: Creating default object from empty value in %s on line 27

Notice: Undefined property: stdClass::$p in %s on line 27
NULL
array(1) {
  ["false"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    NULL
  }
}
==assigning-string-cat==

Warning: Creating default object from empty value in %s on line 33

Notice: Undefined property: stdClass::$p in %s on line 33
string(1) "A"
array(1) {
  ["false"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    string(1) "A"
  }
}
==assigning-arithmetic-op==

Warning: Creating default object from empty value in %s on line 39

Notice: Undefined property: stdClass::$p in %s on line 39
int(2)
array(1) {
  ["false"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(2)
  }
}

Warning: Creating default object from empty value in %s on line 43

Notice: Undefined property: stdClass::$p in %s on line 43
int(-2)
array(1) {
  ["false"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(-2)
  }
}

Warning: Creating default object from empty value in %s on line 47

Notice: Undefined property: stdClass::$p in %s on line 47
int(0)
array(1) {
  ["false"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 51

Notice: Undefined property: stdClass::$p in %s on line 51
int(0)
array(1) {
  ["false"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 55

Notice: Undefined property: stdClass::$p in %s on line 55
int(0)
array(1) {
  ["false"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 59

Notice: Undefined property: stdClass::$p in %s on line 59
int(0)
array(1) {
  ["false"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 63

Notice: Undefined property: stdClass::$p in %s on line 63
int(0)
array(1) {
  ["false"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 67

Notice: Undefined property: stdClass::$p in %s on line 67
int(2)
array(1) {
  ["false"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(2)
  }
}

Warning: Creating default object from empty value in %s on line 71

Notice: Undefined property: stdClass::$p in %s on line 71
int(2)
array(1) {
  ["false"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(2)
  }
}

Warning: Creating default object from empty value in %s on line 75

Notice: Undefined property: stdClass::$p in %s on line 75
int(0)
array(1) {
  ["false"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}
==postcrement==

Warning: Creating default object from empty value in %s on line 13

Notice: Undefined property: stdClass::$p in %s on line 13
NULL
array(1) {
  ["empty_string"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(1)
  }
}

Warning: Creating default object from empty value in %s on line 17

Notice: Undefined property: stdClass::$p in %s on line 17
NULL
array(1) {
  ["empty_string"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    NULL
  }
}
==precrement==

Warning: Creating default object from empty value in %s on line 23

Notice: Undefined property: stdClass::$p in %s on line 23
int(1)
array(1) {
  ["empty_string"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(1)
  }
}

Warning: Creating default object from empty value in %s on line 27

Notice: Undefined property: stdClass::$p in %s on line 27
NULL
array(1) {
  ["empty_string"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    NULL
  }
}
==assigning-string-cat==

Warning: Creating default object from empty value in %s on line 33

Notice: Undefined property: stdClass::$p in %s on line 33
string(1) "A"
array(1) {
  ["empty_string"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    string(1) "A"
  }
}
==assigning-arithmetic-op==

Warning: Creating default object from empty value in %s on line 39

Notice: Undefined property: stdClass::$p in %s on line 39
int(2)
array(1) {
  ["empty_string"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(2)
  }
}

Warning: Creating default object from empty value in %s on line 43

Notice: Undefined property: stdClass::$p in %s on line 43
int(-2)
array(1) {
  ["empty_string"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(-2)
  }
}

Warning: Creating default object from empty value in %s on line 47

Notice: Undefined property: stdClass::$p in %s on line 47
int(0)
array(1) {
  ["empty_string"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 51

Notice: Undefined property: stdClass::$p in %s on line 51
int(0)
array(1) {
  ["empty_string"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 55

Notice: Undefined property: stdClass::$p in %s on line 55
int(0)
array(1) {
  ["empty_string"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 59

Notice: Undefined property: stdClass::$p in %s on line 59
int(0)
array(1) {
  ["empty_string"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 63

Notice: Undefined property: stdClass::$p in %s on line 63
int(0)
array(1) {
  ["empty_string"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}

Warning: Creating default object from empty value in %s on line 67

Notice: Undefined property: stdClass::$p in %s on line 67
int(2)
array(1) {
  ["empty_string"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(2)
  }
}

Warning: Creating default object from empty value in %s on line 71

Notice: Undefined property: stdClass::$p in %s on line 71
int(2)
array(1) {
  ["empty_string"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(2)
  }
}

Warning: Creating default object from empty value in %s on line 75

Notice: Undefined property: stdClass::$p in %s on line 75
int(0)
array(1) {
  ["empty_string"]=>
  object(stdClass)#%d (1) {
    ["p"]=>
    int(0)
  }
}
