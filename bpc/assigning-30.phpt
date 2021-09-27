--TEST--
assigning tests
--FILE--
<?php

$arr = array(
    'null'  => null,
    'false' => false
);

foreach ($arr as $k => $v) {
    echo "==postcrement==\n";

    $a = array($k => $v);
    var_dump($a[$k][]->p++);
    var_dump($a);

    $a = array($k => $v);
    var_dump($a[$k][]->p--);
    var_dump($a);

    echo "==precrement==\n";

    $a = array($k => $v);
    var_dump(++$a[$k][]->p);
    var_dump($a);

    $a = array($k => $v);
    var_dump(--$a[$k][]->p);
    var_dump($a);

    echo "==assigning-string-cat==\n";

    $a = array($k => $v);
    var_dump($a[$k][]->p .= 'A');
    var_dump($a);

    echo "==assigning-arithmetic-op==\n";

    $a = array($k => $v);
    var_dump($a[$k][]->p += 2);
    var_dump($a);

    $a = array($k => $v);
    var_dump($a[$k][]->p -= 2);
    var_dump($a);

    $a = array($k => $v);
    var_dump($a[$k][]->p *= 2);
    var_dump($a);

    $a = array($k => $v);
    var_dump($a[$k][]->p /= 2);
    var_dump($a);

    $a = array($k => $v);
    var_dump($a[$k][]->p %= 2);
    var_dump($a);

    $a = array($k => $v);
    var_dump($a[$k][]->p **= 2);
    var_dump($a);

    $a = array($k => $v);
    var_dump($a[$k][]->p <<= 2);
    var_dump($a);

    $a = array($k => $v);
    var_dump($a[$k][]->p |= 2);
    var_dump($a);

    $a = array($k => $v);
    var_dump($a[$k][]->p ^= 2);
    var_dump($a);

    $a = array($k => $v);
    var_dump($a[$k][]->p &= 2);
    var_dump($a);
}
?>
--EXPECTF--
==postcrement==

Warning: Creating default object from empty value in %s on line 12

Notice: Undefined property: stdClass::$p in %s on line 12
NULL
array(1) {
  ["null"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(1)
    }
  }
}

Warning: Creating default object from empty value in %s on line 16

Notice: Undefined property: stdClass::$p in %s on line 16
NULL
array(1) {
  ["null"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      NULL
    }
  }
}
==precrement==

Warning: Creating default object from empty value in %s on line 22

Notice: Undefined property: stdClass::$p in %s on line 22
int(1)
array(1) {
  ["null"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(1)
    }
  }
}

Warning: Creating default object from empty value in %s on line 26

Notice: Undefined property: stdClass::$p in %s on line 26
NULL
array(1) {
  ["null"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      NULL
    }
  }
}
==assigning-string-cat==

Warning: Creating default object from empty value in %s on line 32

Notice: Undefined property: stdClass::$p in %s on line 32
string(1) "A"
array(1) {
  ["null"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      string(1) "A"
    }
  }
}
==assigning-arithmetic-op==

Warning: Creating default object from empty value in %s on line 38

Notice: Undefined property: stdClass::$p in %s on line 38
int(2)
array(1) {
  ["null"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(2)
    }
  }
}

Warning: Creating default object from empty value in %s on line 42

Notice: Undefined property: stdClass::$p in %s on line 42
int(-2)
array(1) {
  ["null"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(-2)
    }
  }
}

Warning: Creating default object from empty value in %s on line 46

Notice: Undefined property: stdClass::$p in %s on line 46
int(0)
array(1) {
  ["null"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(0)
    }
  }
}

Warning: Creating default object from empty value in %s on line 50

Notice: Undefined property: stdClass::$p in %s on line 50
int(0)
array(1) {
  ["null"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(0)
    }
  }
}

Warning: Creating default object from empty value in %s on line 54

Notice: Undefined property: stdClass::$p in %s on line 54
int(0)
array(1) {
  ["null"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(0)
    }
  }
}

Warning: Creating default object from empty value in %s on line 58

Notice: Undefined property: stdClass::$p in %s on line 58
int(0)
array(1) {
  ["null"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(0)
    }
  }
}

Warning: Creating default object from empty value in %s on line 62

Notice: Undefined property: stdClass::$p in %s on line 62
int(0)
array(1) {
  ["null"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(0)
    }
  }
}

Warning: Creating default object from empty value in %s on line 66

Notice: Undefined property: stdClass::$p in %s on line 66
int(2)
array(1) {
  ["null"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(2)
    }
  }
}

Warning: Creating default object from empty value in %s on line 70

Notice: Undefined property: stdClass::$p in %s on line 70
int(2)
array(1) {
  ["null"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(2)
    }
  }
}

Warning: Creating default object from empty value in %s on line 74

Notice: Undefined property: stdClass::$p in %s on line 74
int(0)
array(1) {
  ["null"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(0)
    }
  }
}
==postcrement==

Warning: Creating default object from empty value in %s on line 12

Notice: Undefined property: stdClass::$p in %s on line 12
NULL
array(1) {
  ["false"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(1)
    }
  }
}

Warning: Creating default object from empty value in %s on line 16

Notice: Undefined property: stdClass::$p in %s on line 16
NULL
array(1) {
  ["false"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      NULL
    }
  }
}
==precrement==

Warning: Creating default object from empty value in %s on line 22

Notice: Undefined property: stdClass::$p in %s on line 22
int(1)
array(1) {
  ["false"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(1)
    }
  }
}

Warning: Creating default object from empty value in %s on line 26

Notice: Undefined property: stdClass::$p in %s on line 26
NULL
array(1) {
  ["false"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      NULL
    }
  }
}
==assigning-string-cat==

Warning: Creating default object from empty value in %s on line 32

Notice: Undefined property: stdClass::$p in %s on line 32
string(1) "A"
array(1) {
  ["false"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      string(1) "A"
    }
  }
}
==assigning-arithmetic-op==

Warning: Creating default object from empty value in %s on line 38

Notice: Undefined property: stdClass::$p in %s on line 38
int(2)
array(1) {
  ["false"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(2)
    }
  }
}

Warning: Creating default object from empty value in %s on line 42

Notice: Undefined property: stdClass::$p in %s on line 42
int(-2)
array(1) {
  ["false"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(-2)
    }
  }
}

Warning: Creating default object from empty value in %s on line 46

Notice: Undefined property: stdClass::$p in %s on line 46
int(0)
array(1) {
  ["false"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(0)
    }
  }
}

Warning: Creating default object from empty value in %s on line 50

Notice: Undefined property: stdClass::$p in %s on line 50
int(0)
array(1) {
  ["false"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(0)
    }
  }
}

Warning: Creating default object from empty value in %s on line 54

Notice: Undefined property: stdClass::$p in %s on line 54
int(0)
array(1) {
  ["false"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(0)
    }
  }
}

Warning: Creating default object from empty value in %s on line 58

Notice: Undefined property: stdClass::$p in %s on line 58
int(0)
array(1) {
  ["false"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(0)
    }
  }
}

Warning: Creating default object from empty value in %s on line 62

Notice: Undefined property: stdClass::$p in %s on line 62
int(0)
array(1) {
  ["false"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(0)
    }
  }
}

Warning: Creating default object from empty value in %s on line 66

Notice: Undefined property: stdClass::$p in %s on line 66
int(2)
array(1) {
  ["false"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(2)
    }
  }
}

Warning: Creating default object from empty value in %s on line 70

Notice: Undefined property: stdClass::$p in %s on line 70
int(2)
array(1) {
  ["false"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(2)
    }
  }
}

Warning: Creating default object from empty value in %s on line 74

Notice: Undefined property: stdClass::$p in %s on line 74
int(0)
array(1) {
  ["false"]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(0)
    }
  }
}
