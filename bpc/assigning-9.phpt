--TEST--
assigning tests
--FILE--
<?php

class A
{
    public function __get($name)
    {
        echo "__get($name)\n";
    }

    public function __set($name, $value)
    {
        echo "__set($name, $value)\n";
    }
}

echo "==postcrement==\n";

$a = new A;
var_dump($a->p->q[0]++);
var_dump($a);

$a = new A;
var_dump($a->p->q[0]--);
var_dump($a);

echo "==precrement==\n";

$a = new A;
var_dump(++$a->p->q[0]);
var_dump($a);

$a = new A;
var_dump(--$a->p->q[0]);
var_dump($a);

echo "==assigning-string-cat==\n";

$a = new A;
var_dump($a->p->q[0] .= 'A');
var_dump($a);

echo "==assigning-arithmetic-op==\n";

$a = new A;
var_dump($a->p->q[0] += 2);
var_dump($a);

$a = new A;
var_dump($a->p->q[0] -= 2);
var_dump($a);

$a = new A;
var_dump($a->p->q[0] *= 2);
var_dump($a);

$a = new A;
var_dump($a->p->q[0] /= 2);
var_dump($a);

$a = new A;
var_dump($a->p->q[0] %= 2);
var_dump($a);

$a = new A;
var_dump($a->p->q[0] **= 2);
var_dump($a);

$a = new A;
var_dump($a->p->q[0] <<= 2);
var_dump($a);

$a = new A;
var_dump($a->p->q[0] |= 2);
var_dump($a);

$a = new A;
var_dump($a->p->q[0] ^= 2);
var_dump($a);

$a = new A;
var_dump($a->p->q[0] &= 2);
var_dump($a);

?>
--EXPECTF--
==postcrement==
__get(p)

Notice: Indirect modification of overloaded property A::$p has no effect in %s on line 19

Notice: Undefined property: stdClass::$q in %s on line 19

Notice: Undefined offset: 0 in %s on line 19
NULL
object(A)#%d (0) {
}
__get(p)

Notice: Indirect modification of overloaded property A::$p has no effect in %s on line 23

Notice: Undefined property: stdClass::$q in %s on line 23

Notice: Undefined offset: 0 in %s on line 23
NULL
object(A)#%d (0) {
}
==precrement==
__get(p)

Notice: Indirect modification of overloaded property A::$p has no effect in %s on line 29

Notice: Undefined property: stdClass::$q in %s on line 29

Notice: Undefined offset: 0 in %s on line 29
int(1)
object(A)#%d (0) {
}
__get(p)

Notice: Indirect modification of overloaded property A::$p has no effect in %s on line 33

Notice: Undefined property: stdClass::$q in %s on line 33

Notice: Undefined offset: 0 in %s on line 33
NULL
object(A)#%d (0) {
}
==assigning-string-cat==
__get(p)

Notice: Indirect modification of overloaded property A::$p has no effect in %s on line 39

Notice: Undefined property: stdClass::$q in %s on line 39

Notice: Undefined offset: 0 in %s on line 39
string(1) "A"
object(A)#%d (0) {
}
==assigning-arithmetic-op==
__get(p)

Notice: Indirect modification of overloaded property A::$p has no effect in %s on line 45

Notice: Undefined property: stdClass::$q in %s on line 45

Notice: Undefined offset: 0 in %s on line 45
int(2)
object(A)#%d (0) {
}
__get(p)

Notice: Indirect modification of overloaded property A::$p has no effect in %s on line 49

Notice: Undefined property: stdClass::$q in %s on line 49

Notice: Undefined offset: 0 in %s on line 49
int(-2)
object(A)#%d (0) {
}
__get(p)

Notice: Indirect modification of overloaded property A::$p has no effect in %s on line 53

Notice: Undefined property: stdClass::$q in %s on line 53

Notice: Undefined offset: 0 in %s on line 53
int(0)
object(A)#%d (0) {
}
__get(p)

Notice: Indirect modification of overloaded property A::$p has no effect in %s on line 57

Notice: Undefined property: stdClass::$q in %s on line 57

Notice: Undefined offset: 0 in %s on line 57
int(0)
object(A)#%d (0) {
}
__get(p)

Notice: Indirect modification of overloaded property A::$p has no effect in %s on line 61

Notice: Undefined property: stdClass::$q in %s on line 61

Notice: Undefined offset: 0 in %s on line 61
int(0)
object(A)#%d (0) {
}
__get(p)

Notice: Indirect modification of overloaded property A::$p has no effect in %s on line 65

Notice: Undefined property: stdClass::$q in %s on line 65

Notice: Undefined offset: 0 in %s on line 65
int(0)
object(A)#%d (0) {
}
__get(p)

Notice: Indirect modification of overloaded property A::$p has no effect in %s on line 69

Notice: Undefined property: stdClass::$q in %s on line 69

Notice: Undefined offset: 0 in %s on line 69
int(0)
object(A)#%d (0) {
}
__get(p)

Notice: Indirect modification of overloaded property A::$p has no effect in %s on line 73

Notice: Undefined property: stdClass::$q in %s on line 73

Notice: Undefined offset: 0 in %s on line 73
int(2)
object(A)#%d (0) {
}
__get(p)

Notice: Indirect modification of overloaded property A::$p has no effect in %s on line 77

Notice: Undefined property: stdClass::$q in %s on line 77

Notice: Undefined offset: 0 in %s on line 77
int(2)
object(A)#%d (0) {
}
__get(p)

Notice: Indirect modification of overloaded property A::$p has no effect in %s on line 81

Notice: Undefined property: stdClass::$q in %s on line 81

Notice: Undefined offset: 0 in %s on line 81
int(0)
object(A)#%d (0) {
}
