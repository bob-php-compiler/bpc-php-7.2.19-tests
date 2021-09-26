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
    'offset null'         => null,
    'offset false'        => false,
    'offset empty_string' => '',
    'offset true'         => true
);

foreach ($arr as $k => $v) {
    echo "==$k postcrement==\n";

    $a = new A;
    var_dump($a[$v]->p++);
    var_dump($a);

    $a = new A;
    var_dump($a[$v]->p--);
    var_dump($a);

    echo "==$k precrement==\n";

    $a = new A;
    var_dump(++$a[$v]->p);
    var_dump($a);

    $a = new A;
    var_dump(--$a[$v]->p);
    var_dump($a);

    echo "==$k assigning-string-cat==\n";

    $a = new A;
    var_dump($a[$v]->p .= 'A');
    var_dump($a);

    echo "==$k assigning-arithmetic-op==\n";

    $a = new A;
    var_dump($a[$v]->p += 2);
    var_dump($a);

    $a = new A;
    var_dump($a[$v]->p -= 2);
    var_dump($a);

    $a = new A;
    var_dump($a[$v]->p *= 2);
    var_dump($a);

    $a = new A;
    var_dump($a[$v]->p /= 2);
    var_dump($a);

    $a = new A;
    var_dump($a[$v]->p %= 2);
    var_dump($a);

    $a = new A;
    var_dump($a[$v]->p **= 2);
    var_dump($a);

    $a = new A;
    var_dump($a[$v]->p <<= 2);
    var_dump($a);

    $a = new A;
    var_dump($a[$v]->p |= 2);
    var_dump($a);

    $a = new A;
    var_dump($a[$v]->p ^= 2);
    var_dump($a);

    $a = new A;
    var_dump($a[$v]->p &= 2);
    var_dump($a);
}
?>
--EXPECTF--
==offset null postcrement==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 41

Warning: Creating default object from empty value in %s on line 41

Notice: Undefined property: stdClass::$p in %s on line 41
NULL
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 45

Warning: Creating default object from empty value in %s on line 45

Notice: Undefined property: stdClass::$p in %s on line 45
NULL
object(A)#%d (0) {
}
==offset null precrement==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 51

Warning: Creating default object from empty value in %s on line 51

Notice: Undefined property: stdClass::$p in %s on line 51
int(1)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 55

Warning: Creating default object from empty value in %s on line 55

Notice: Undefined property: stdClass::$p in %s on line 55
NULL
object(A)#%d (0) {
}
==offset null assigning-string-cat==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 61

Warning: Creating default object from empty value in %s on line 61

Notice: Undefined property: stdClass::$p in %s on line 61
string(1) "A"
object(A)#%d (0) {
}
==offset null assigning-arithmetic-op==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 67

Warning: Creating default object from empty value in %s on line 67

Notice: Undefined property: stdClass::$p in %s on line 67
int(2)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 71

Warning: Creating default object from empty value in %s on line 71

Notice: Undefined property: stdClass::$p in %s on line 71
int(-2)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 75

Warning: Creating default object from empty value in %s on line 75

Notice: Undefined property: stdClass::$p in %s on line 75
int(0)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 79

Warning: Creating default object from empty value in %s on line 79

Notice: Undefined property: stdClass::$p in %s on line 79
int(0)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 83

Warning: Creating default object from empty value in %s on line 83

Notice: Undefined property: stdClass::$p in %s on line 83
int(0)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 87

Warning: Creating default object from empty value in %s on line 87

Notice: Undefined property: stdClass::$p in %s on line 87
int(0)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 91

Warning: Creating default object from empty value in %s on line 91

Notice: Undefined property: stdClass::$p in %s on line 91
int(0)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 95

Warning: Creating default object from empty value in %s on line 95

Notice: Undefined property: stdClass::$p in %s on line 95
int(2)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 99

Warning: Creating default object from empty value in %s on line 99

Notice: Undefined property: stdClass::$p in %s on line 99
int(2)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 103

Warning: Creating default object from empty value in %s on line 103

Notice: Undefined property: stdClass::$p in %s on line 103
int(0)
object(A)#%d (0) {
}
==offset false postcrement==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 41

Warning: Creating default object from empty value in %s on line 41

Notice: Undefined property: stdClass::$p in %s on line 41
NULL
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 45

Warning: Creating default object from empty value in %s on line 45

Notice: Undefined property: stdClass::$p in %s on line 45
NULL
object(A)#%d (0) {
}
==offset false precrement==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 51

Warning: Creating default object from empty value in %s on line 51

Notice: Undefined property: stdClass::$p in %s on line 51
int(1)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 55

Warning: Creating default object from empty value in %s on line 55

Notice: Undefined property: stdClass::$p in %s on line 55
NULL
object(A)#%d (0) {
}
==offset false assigning-string-cat==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 61

Warning: Creating default object from empty value in %s on line 61

Notice: Undefined property: stdClass::$p in %s on line 61
string(1) "A"
object(A)#%d (0) {
}
==offset false assigning-arithmetic-op==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 67

Warning: Creating default object from empty value in %s on line 67

Notice: Undefined property: stdClass::$p in %s on line 67
int(2)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 71

Warning: Creating default object from empty value in %s on line 71

Notice: Undefined property: stdClass::$p in %s on line 71
int(-2)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 75

Warning: Creating default object from empty value in %s on line 75

Notice: Undefined property: stdClass::$p in %s on line 75
int(0)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 79

Warning: Creating default object from empty value in %s on line 79

Notice: Undefined property: stdClass::$p in %s on line 79
int(0)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 83

Warning: Creating default object from empty value in %s on line 83

Notice: Undefined property: stdClass::$p in %s on line 83
int(0)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 87

Warning: Creating default object from empty value in %s on line 87

Notice: Undefined property: stdClass::$p in %s on line 87
int(0)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 91

Warning: Creating default object from empty value in %s on line 91

Notice: Undefined property: stdClass::$p in %s on line 91
int(0)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 95

Warning: Creating default object from empty value in %s on line 95

Notice: Undefined property: stdClass::$p in %s on line 95
int(2)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 99

Warning: Creating default object from empty value in %s on line 99

Notice: Undefined property: stdClass::$p in %s on line 99
int(2)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 103

Warning: Creating default object from empty value in %s on line 103

Notice: Undefined property: stdClass::$p in %s on line 103
int(0)
object(A)#%d (0) {
}
==offset empty_string postcrement==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 41

Warning: Creating default object from empty value in %s on line 41

Notice: Undefined property: stdClass::$p in %s on line 41
NULL
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 45

Warning: Creating default object from empty value in %s on line 45

Notice: Undefined property: stdClass::$p in %s on line 45
NULL
object(A)#%d (0) {
}
==offset empty_string precrement==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 51

Warning: Creating default object from empty value in %s on line 51

Notice: Undefined property: stdClass::$p in %s on line 51
int(1)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 55

Warning: Creating default object from empty value in %s on line 55

Notice: Undefined property: stdClass::$p in %s on line 55
NULL
object(A)#%d (0) {
}
==offset empty_string assigning-string-cat==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 61

Warning: Creating default object from empty value in %s on line 61

Notice: Undefined property: stdClass::$p in %s on line 61
string(1) "A"
object(A)#%d (0) {
}
==offset empty_string assigning-arithmetic-op==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 67

Warning: Creating default object from empty value in %s on line 67

Notice: Undefined property: stdClass::$p in %s on line 67
int(2)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 71

Warning: Creating default object from empty value in %s on line 71

Notice: Undefined property: stdClass::$p in %s on line 71
int(-2)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 75

Warning: Creating default object from empty value in %s on line 75

Notice: Undefined property: stdClass::$p in %s on line 75
int(0)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 79

Warning: Creating default object from empty value in %s on line 79

Notice: Undefined property: stdClass::$p in %s on line 79
int(0)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 83

Warning: Creating default object from empty value in %s on line 83

Notice: Undefined property: stdClass::$p in %s on line 83
int(0)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 87

Warning: Creating default object from empty value in %s on line 87

Notice: Undefined property: stdClass::$p in %s on line 87
int(0)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 91

Warning: Creating default object from empty value in %s on line 91

Notice: Undefined property: stdClass::$p in %s on line 91
int(0)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 95

Warning: Creating default object from empty value in %s on line 95

Notice: Undefined property: stdClass::$p in %s on line 95
int(2)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 99

Warning: Creating default object from empty value in %s on line 99

Notice: Undefined property: stdClass::$p in %s on line 99
int(2)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 103

Warning: Creating default object from empty value in %s on line 103

Notice: Undefined property: stdClass::$p in %s on line 103
int(0)
object(A)#%d (0) {
}
==offset true postcrement==
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 41
NULL
object(A)#%d (0) {
}
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 45
NULL
object(A)#%d (0) {
}
==offset true precrement==
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 51
int(1)
object(A)#%d (0) {
}
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 55
NULL
object(A)#%d (0) {
}
==offset true assigning-string-cat==
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 61
string(1) "A"
object(A)#%d (0) {
}
==offset true assigning-arithmetic-op==
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 67
int(2)
object(A)#%d (0) {
}
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 71
int(-2)
object(A)#%d (0) {
}
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 75
int(0)
object(A)#%d (0) {
}
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 79
int(0)
object(A)#%d (0) {
}
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 83
int(0)
object(A)#%d (0) {
}
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 87
int(0)
object(A)#%d (0) {
}
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 91
int(0)
object(A)#%d (0) {
}
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 95
int(2)
object(A)#%d (0) {
}
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 99
int(2)
object(A)#%d (0) {
}
offsetGet(1)

Notice: Undefined property: stdClass::$p in %s on line 103
int(0)
object(A)#%d (0) {
}
