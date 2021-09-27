--TEST--
assigning tests
--FILE--
<?php

class A implements ArrayAccess
{
    public function offsetExists($offset)
    {
        echo "offsetExists($offset)\n";
    }

    public function offsetGet($offset)
    {
        echo "offsetGet($offset)\n";
        if ($offset) {
            return new stdclass;
        }
        return $offset;
    }

    public function offsetSet($offset, $value)
    {
        echo "offsetSet($offset, $value)\n";
    }

    public function offsetUnset($offset)
    {
        echo "offsetUnset($offset)\n";
    }
}

$arr = array(
    'ret_null'         => null,
    'ret_false'        => false,
    'ret_empty_string' => '',
    'ret_stdclass'     => true
);

foreach ($arr as $k => $v) {
    echo "==$k postcrement==\n";

    $a = array(new A);
    var_dump($a[0][$v]->p++);
    var_dump($a);

    $a = array(new A);
    var_dump($a[0][$v]->p--);
    var_dump($a);

    echo "==$k precrement==\n";

    $a = array(new A);
    var_dump(++$a[0][$v]->p);
    var_dump($a);

    $a = array(new A);
    var_dump(--$a[0][$v]->p);
    var_dump($a);

    echo "==$k assigning-string-cat==\n";

    $a = array(new A);
    var_dump($a[0][$v]->p .= 'A');
    var_dump($a);

    echo "==$k assigning-arithmetic-op==\n";

    $a = array(new A);
    var_dump($a[0][$v]->p += 2);
    var_dump($a);

    $a = array(new A);
    var_dump($a[0][$v]->p -= 2);
    var_dump($a);

    $a = array(new A);
    var_dump($a[0][$v]->p *= 2);
    var_dump($a);

    $a = array(new A);
    var_dump($a[0][$v]->p /= 2);
    var_dump($a);

    $a = array(new A);
    var_dump($a[0][$v]->p %= 2);
    var_dump($a);

    $a = array(new A);
    var_dump($a[0][$v]->p **= 2);
    var_dump($a);

    $a = array(new A);
    var_dump($a[0][$v]->p <<= 2);
    var_dump($a);

    $a = array(new A);
    var_dump($a[0][$v]->p |= 2);
    var_dump($a);

    $a = array(new A);
    var_dump($a[0][$v]->p ^= 2);
    var_dump($a);

    $a = array(new A);
    var_dump($a[0][$v]->p &= 2);
    var_dump($a);
}
?>
--EXPECTF--
==ret_null postcrement==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 41

Warning: Creating default object from empty value in %s on line 41

Notice: Undefined property: stdClass::$p in %s on line 41
NULL
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 45

Warning: Creating default object from empty value in %s on line 45

Notice: Undefined property: stdClass::$p in %s on line 45
NULL
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
==ret_null precrement==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 51

Warning: Creating default object from empty value in %s on line 51

Notice: Undefined property: stdClass::$p in %s on line 51
int(1)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 55

Warning: Creating default object from empty value in %s on line 55

Notice: Undefined property: stdClass::$p in %s on line 55
NULL
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
==ret_null assigning-string-cat==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 61

Warning: Creating default object from empty value in %s on line 61

Notice: Undefined property: stdClass::$p in %s on line 61
string(1) "A"
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
==ret_null assigning-arithmetic-op==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 67

Warning: Creating default object from empty value in %s on line 67

Notice: Undefined property: stdClass::$p in %s on line 67
int(2)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 71

Warning: Creating default object from empty value in %s on line 71

Notice: Undefined property: stdClass::$p in %s on line 71
int(-2)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 75

Warning: Creating default object from empty value in %s on line 75

Notice: Undefined property: stdClass::$p in %s on line 75
int(0)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 79

Warning: Creating default object from empty value in %s on line 79

Notice: Undefined property: stdClass::$p in %s on line 79
int(0)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 83

Warning: Creating default object from empty value in %s on line 83

Notice: Undefined property: stdClass::$p in %s on line 83
int(0)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 87

Warning: Creating default object from empty value in %s on line 87

Notice: Undefined property: stdClass::$p in %s on line 87
int(0)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 91

Warning: Creating default object from empty value in %s on line 91

Notice: Undefined property: stdClass::$p in %s on line 91
int(0)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 95

Warning: Creating default object from empty value in %s on line 95

Notice: Undefined property: stdClass::$p in %s on line 95
int(2)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 99

Warning: Creating default object from empty value in %s on line 99

Notice: Undefined property: stdClass::$p in %s on line 99
int(2)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 103

Warning: Creating default object from empty value in %s on line 103

Notice: Undefined property: stdClass::$p in %s on line 103
int(0)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
==ret_false postcrement==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 41

Warning: Creating default object from empty value in %s on line 41

Notice: Undefined property: stdClass::$p in %s on line 41
NULL
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 45

Warning: Creating default object from empty value in %s on line 45

Notice: Undefined property: stdClass::$p in %s on line 45
NULL
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
==ret_false precrement==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 51

Warning: Creating default object from empty value in %s on line 51

Notice: Undefined property: stdClass::$p in %s on line 51
int(1)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 55

Warning: Creating default object from empty value in %s on line 55

Notice: Undefined property: stdClass::$p in %s on line 55
NULL
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
==ret_false assigning-string-cat==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 61

Warning: Creating default object from empty value in %s on line 61

Notice: Undefined property: stdClass::$p in %s on line 61
string(1) "A"
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
==ret_false assigning-arithmetic-op==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 67

Warning: Creating default object from empty value in %s on line 67

Notice: Undefined property: stdClass::$p in %s on line 67
int(2)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 71

Warning: Creating default object from empty value in %s on line 71

Notice: Undefined property: stdClass::$p in %s on line 71
int(-2)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 75

Warning: Creating default object from empty value in %s on line 75

Notice: Undefined property: stdClass::$p in %s on line 75
int(0)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 79

Warning: Creating default object from empty value in %s on line 79

Notice: Undefined property: stdClass::$p in %s on line 79
int(0)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 83

Warning: Creating default object from empty value in %s on line 83

Notice: Undefined property: stdClass::$p in %s on line 83
int(0)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 87

Warning: Creating default object from empty value in %s on line 87

Notice: Undefined property: stdClass::$p in %s on line 87
int(0)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 91

Warning: Creating default object from empty value in %s on line 91

Notice: Undefined property: stdClass::$p in %s on line 91
int(0)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 95

Warning: Creating default object from empty value in %s on line 95

Notice: Undefined property: stdClass::$p in %s on line 95
int(2)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 99

Warning: Creating default object from empty value in %s on line 99

Notice: Undefined property: stdClass::$p in %s on line 99
int(2)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 103

Warning: Creating default object from empty value in %s on line 103

Notice: Undefined property: stdClass::$p in %s on line 103
int(0)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
==ret_empty_string postcrement==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 41

Warning: Creating default object from empty value in %s on line 41

Notice: Undefined property: stdClass::$p in %s on line 41
NULL
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 45

Warning: Creating default object from empty value in %s on line 45

Notice: Undefined property: stdClass::$p in %s on line 45
NULL
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
==ret_empty_string precrement==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 51

Warning: Creating default object from empty value in %s on line 51

Notice: Undefined property: stdClass::$p in %s on line 51
int(1)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 55

Warning: Creating default object from empty value in %s on line 55

Notice: Undefined property: stdClass::$p in %s on line 55
NULL
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
==ret_empty_string assigning-string-cat==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 61

Warning: Creating default object from empty value in %s on line 61

Notice: Undefined property: stdClass::$p in %s on line 61
string(1) "A"
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
==ret_empty_string assigning-arithmetic-op==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 67

Warning: Creating default object from empty value in %s on line 67

Notice: Undefined property: stdClass::$p in %s on line 67
int(2)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 71

Warning: Creating default object from empty value in %s on line 71

Notice: Undefined property: stdClass::$p in %s on line 71
int(-2)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 75

Warning: Creating default object from empty value in %s on line 75

Notice: Undefined property: stdClass::$p in %s on line 75
int(0)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 79

Warning: Creating default object from empty value in %s on line 79

Notice: Undefined property: stdClass::$p in %s on line 79
int(0)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 83

Warning: Creating default object from empty value in %s on line 83

Notice: Undefined property: stdClass::$p in %s on line 83
int(0)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 87

Warning: Creating default object from empty value in %s on line 87

Notice: Undefined property: stdClass::$p in %s on line 87
int(0)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 91

Warning: Creating default object from empty value in %s on line 91

Notice: Undefined property: stdClass::$p in %s on line 91
int(0)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 95

Warning: Creating default object from empty value in %s on line 95

Notice: Undefined property: stdClass::$p in %s on line 95
int(2)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 99

Warning: Creating default object from empty value in %s on line 99

Notice: Undefined property: stdClass::$p in %s on line 99
int(2)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 103

Warning: Creating default object from empty value in %s on line 103

Notice: Undefined property: stdClass::$p in %s on line 103
int(0)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
==ret_stdclass postcrement==
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 41
NULL
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 45
NULL
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
==ret_stdclass precrement==
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 51
int(1)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 55
NULL
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
==ret_stdclass assigning-string-cat==
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 61
string(1) "A"
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
==ret_stdclass assigning-arithmetic-op==
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 67
int(2)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 71
int(-2)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 75
int(0)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 79
int(0)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 83
int(0)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 87
int(0)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 91
int(0)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 95
int(2)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 99
int(2)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 103
int(0)
array(1) {
  [0]=>
  object(A)#%d (0) {
  }
}
