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

echo "==postcrement==\n";

$a = new A;
var_dump($a[]->p++);
var_dump($a);

$a = new A;
var_dump($a[]->p--);
var_dump($a);

echo "==precrement==\n";

$a = new A;
var_dump(++$a[]->p);
var_dump($a);

$a = new A;
var_dump(--$a[]->p);
var_dump($a);

echo "==assigning-string-cat==\n";

$a = new A;
var_dump($a[]->p .= 'A');
var_dump($a);

echo "==assigning-arithmetic-op==\n";

$a = new A;
var_dump($a[]->p += 2);
var_dump($a);

$a = new A;
var_dump($a[]->p -= 2);
var_dump($a);

$a = new A;
var_dump($a[]->p *= 2);
var_dump($a);

$a = new A;
var_dump($a[]->p /= 2);
var_dump($a);

$a = new A;
var_dump($a[]->p %= 2);
var_dump($a);

$a = new A;
var_dump($a[]->p **= 2);
var_dump($a);

$a = new A;
var_dump($a[]->p <<= 2);
var_dump($a);

$a = new A;
var_dump($a[]->p |= 2);
var_dump($a);

$a = new A;
var_dump($a[]->p ^= 2);
var_dump($a);

$a = new A;
var_dump($a[]->p &= 2);
var_dump($a);

?>
--EXPECTF--
==postcrement==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 29

Warning: Creating default object from empty value in %s on line 29

Notice: Undefined property: stdClass::$p in %s on line 29
NULL
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 33

Warning: Creating default object from empty value in %s on line 33

Notice: Undefined property: stdClass::$p in %s on line 33
NULL
object(A)#%d (0) {
}
==precrement==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 39

Warning: Creating default object from empty value in %s on line 39

Notice: Undefined property: stdClass::$p in %s on line 39
int(1)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 43

Warning: Creating default object from empty value in %s on line 43

Notice: Undefined property: stdClass::$p in %s on line 43
NULL
object(A)#%d (0) {
}
==assigning-string-cat==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 49

Warning: Creating default object from empty value in %s on line 49

Notice: Undefined property: stdClass::$p in %s on line 49
string(1) "A"
object(A)#%d (0) {
}
==assigning-arithmetic-op==
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 55

Warning: Creating default object from empty value in %s on line 55

Notice: Undefined property: stdClass::$p in %s on line 55
int(2)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 59

Warning: Creating default object from empty value in %s on line 59

Notice: Undefined property: stdClass::$p in %s on line 59
int(-2)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 63

Warning: Creating default object from empty value in %s on line 63

Notice: Undefined property: stdClass::$p in %s on line 63
int(0)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 67

Warning: Creating default object from empty value in %s on line 67

Notice: Undefined property: stdClass::$p in %s on line 67
int(0)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 71

Warning: Creating default object from empty value in %s on line 71

Notice: Undefined property: stdClass::$p in %s on line 71
int(0)
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
int(2)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 87

Warning: Creating default object from empty value in %s on line 87

Notice: Undefined property: stdClass::$p in %s on line 87
int(2)
object(A)#%d (0) {
}
offsetGet()

Notice: Indirect modification of overloaded element of A has no effect in %s on line 91

Warning: Creating default object from empty value in %s on line 91

Notice: Undefined property: stdClass::$p in %s on line 91
int(0)
object(A)#%d (0) {
}
