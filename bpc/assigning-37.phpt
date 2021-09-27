--TEST--
assigning tests
--FILE--
<?php

echo "==postcrement==\n";

$a = array(array());
var_dump($a[0][0]->p++);
var_dump($a);

$a = array(array());
var_dump($a[0][0]->p--);
var_dump($a);

echo "==precrement==\n";

$a = array(array());
var_dump(++$a[0][0]->p);
var_dump($a);

$a = array(array());
var_dump(--$a[0][0]->p);
var_dump($a);

echo "==assigning-string-cat==\n";

$a = array(array());
var_dump($a[0][0]->p .= 'A');
var_dump($a);

echo "==assigning-arithmetic-op==\n";

$a = array(array());
var_dump($a[0][0]->p += 2);
var_dump($a);

$a = array(array());
var_dump($a[0][0]->p -= 2);
var_dump($a);

$a = array(array());
var_dump($a[0][0]->p *= 2);
var_dump($a);

$a = array(array());
var_dump($a[0][0]->p /= 2);
var_dump($a);

$a = array(array());
var_dump($a[0][0]->p %= 2);
var_dump($a);

$a = array(array());
var_dump($a[0][0]->p **= 2);
var_dump($a);

$a = array(array());
var_dump($a[0][0]->p <<= 2);
var_dump($a);

$a = array(array());
var_dump($a[0][0]->p |= 2);
var_dump($a);

$a = array(array());
var_dump($a[0][0]->p ^= 2);
var_dump($a);

$a = array(array());
var_dump($a[0][0]->p &= 2);
var_dump($a);
?>
--EXPECTF--
==postcrement==

Notice: Undefined offset: 0 in %s on line 6

Warning: Creating default object from empty value in %s on line 6

Notice: Undefined property: stdClass::$p in %s on line 6
NULL
array(1) {
  [0]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(1)
    }
  }
}

Notice: Undefined offset: 0 in %s on line 10

Warning: Creating default object from empty value in %s on line 10

Notice: Undefined property: stdClass::$p in %s on line 10
NULL
array(1) {
  [0]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      NULL
    }
  }
}
==precrement==

Notice: Undefined offset: 0 in %s on line 16

Warning: Creating default object from empty value in %s on line 16

Notice: Undefined property: stdClass::$p in %s on line 16
int(1)
array(1) {
  [0]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(1)
    }
  }
}

Notice: Undefined offset: 0 in %s on line 20

Warning: Creating default object from empty value in %s on line 20

Notice: Undefined property: stdClass::$p in %s on line 20
NULL
array(1) {
  [0]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      NULL
    }
  }
}
==assigning-string-cat==

Notice: Undefined offset: 0 in %s on line 26

Warning: Creating default object from empty value in %s on line 26

Notice: Undefined property: stdClass::$p in %s on line 26
string(1) "A"
array(1) {
  [0]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      string(1) "A"
    }
  }
}
==assigning-arithmetic-op==

Notice: Undefined offset: 0 in %s on line 32

Warning: Creating default object from empty value in %s on line 32

Notice: Undefined property: stdClass::$p in %s on line 32
int(2)
array(1) {
  [0]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(2)
    }
  }
}

Notice: Undefined offset: 0 in %s on line 36

Warning: Creating default object from empty value in %s on line 36

Notice: Undefined property: stdClass::$p in %s on line 36
int(-2)
array(1) {
  [0]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(-2)
    }
  }
}

Notice: Undefined offset: 0 in %s on line 40

Warning: Creating default object from empty value in %s on line 40

Notice: Undefined property: stdClass::$p in %s on line 40
int(0)
array(1) {
  [0]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(0)
    }
  }
}

Notice: Undefined offset: 0 in %s on line 44

Warning: Creating default object from empty value in %s on line 44

Notice: Undefined property: stdClass::$p in %s on line 44
int(0)
array(1) {
  [0]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(0)
    }
  }
}

Notice: Undefined offset: 0 in %s on line 48

Warning: Creating default object from empty value in %s on line 48

Notice: Undefined property: stdClass::$p in %s on line 48
int(0)
array(1) {
  [0]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(0)
    }
  }
}

Notice: Undefined offset: 0 in %s on line 52

Warning: Creating default object from empty value in %s on line 52

Notice: Undefined property: stdClass::$p in %s on line 52
int(0)
array(1) {
  [0]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(0)
    }
  }
}

Notice: Undefined offset: 0 in %s on line 56

Warning: Creating default object from empty value in %s on line 56

Notice: Undefined property: stdClass::$p in %s on line 56
int(0)
array(1) {
  [0]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(0)
    }
  }
}

Notice: Undefined offset: 0 in %s on line 60

Warning: Creating default object from empty value in %s on line 60

Notice: Undefined property: stdClass::$p in %s on line 60
int(2)
array(1) {
  [0]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(2)
    }
  }
}

Notice: Undefined offset: 0 in %s on line 64

Warning: Creating default object from empty value in %s on line 64

Notice: Undefined property: stdClass::$p in %s on line 64
int(2)
array(1) {
  [0]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(2)
    }
  }
}

Notice: Undefined offset: 0 in %s on line 68

Warning: Creating default object from empty value in %s on line 68

Notice: Undefined property: stdClass::$p in %s on line 68
int(0)
array(1) {
  [0]=>
  array(1) {
    [0]=>
    object(stdClass)#%d (1) {
      ["p"]=>
      int(0)
    }
  }
}
