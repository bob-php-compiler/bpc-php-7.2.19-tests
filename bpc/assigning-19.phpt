--TEST--
assigning tests
--FILE--
<?php

$arr = array(
    'true'     => true,
    'int'      => 1,
    'float'    => 1.1,
    'resource' => fopen('/proc/self/comm', 'r')
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
==true postcrement==

Warning: Cannot use a scalar value as an array in %s on line 14

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 14
NULL
bool(true)

Warning: Cannot use a scalar value as an array in %s on line 18

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 18
NULL
bool(true)
==true precrement==

Warning: Cannot use a scalar value as an array in %s on line 24

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 24
NULL
bool(true)

Warning: Cannot use a scalar value as an array in %s on line 28

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 28
NULL
bool(true)
==true assigning-string-cat==

Warning: Cannot use a scalar value as an array in %s on line 34

Warning: Attempt to assign property 'p' of non-object in %s on line 34
NULL
bool(true)
==true assigning-arithmetic-op==

Warning: Cannot use a scalar value as an array in %s on line 40

Warning: Attempt to assign property 'p' of non-object in %s on line 40
NULL
bool(true)

Warning: Cannot use a scalar value as an array in %s on line 44

Warning: Attempt to assign property 'p' of non-object in %s on line 44
NULL
bool(true)

Warning: Cannot use a scalar value as an array in %s on line 48

Warning: Attempt to assign property 'p' of non-object in %s on line 48
NULL
bool(true)

Warning: Cannot use a scalar value as an array in %s on line 52

Warning: Attempt to assign property 'p' of non-object in %s on line 52
NULL
bool(true)

Warning: Cannot use a scalar value as an array in %s on line 56

Warning: Attempt to assign property 'p' of non-object in %s on line 56
NULL
bool(true)

Warning: Cannot use a scalar value as an array in %s on line 60

Warning: Attempt to assign property 'p' of non-object in %s on line 60
NULL
bool(true)

Warning: Cannot use a scalar value as an array in %s on line 64

Warning: Attempt to assign property 'p' of non-object in %s on line 64
NULL
bool(true)

Warning: Cannot use a scalar value as an array in %s on line 68

Warning: Attempt to assign property 'p' of non-object in %s on line 68
NULL
bool(true)

Warning: Cannot use a scalar value as an array in %s on line 72

Warning: Attempt to assign property 'p' of non-object in %s on line 72
NULL
bool(true)

Warning: Cannot use a scalar value as an array in %s on line 76

Warning: Attempt to assign property 'p' of non-object in %s on line 76
NULL
bool(true)
==int postcrement==

Warning: Cannot use a scalar value as an array in %s on line 14

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 14
NULL
int(1)

Warning: Cannot use a scalar value as an array in %s on line 18

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 18
NULL
int(1)
==int precrement==

Warning: Cannot use a scalar value as an array in %s on line 24

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 24
NULL
int(1)

Warning: Cannot use a scalar value as an array in %s on line 28

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 28
NULL
int(1)
==int assigning-string-cat==

Warning: Cannot use a scalar value as an array in %s on line 34

Warning: Attempt to assign property 'p' of non-object in %s on line 34
NULL
int(1)
==int assigning-arithmetic-op==

Warning: Cannot use a scalar value as an array in %s on line 40

Warning: Attempt to assign property 'p' of non-object in %s on line 40
NULL
int(1)

Warning: Cannot use a scalar value as an array in %s on line 44

Warning: Attempt to assign property 'p' of non-object in %s on line 44
NULL
int(1)

Warning: Cannot use a scalar value as an array in %s on line 48

Warning: Attempt to assign property 'p' of non-object in %s on line 48
NULL
int(1)

Warning: Cannot use a scalar value as an array in %s on line 52

Warning: Attempt to assign property 'p' of non-object in %s on line 52
NULL
int(1)

Warning: Cannot use a scalar value as an array in %s on line 56

Warning: Attempt to assign property 'p' of non-object in %s on line 56
NULL
int(1)

Warning: Cannot use a scalar value as an array in %s on line 60

Warning: Attempt to assign property 'p' of non-object in %s on line 60
NULL
int(1)

Warning: Cannot use a scalar value as an array in %s on line 64

Warning: Attempt to assign property 'p' of non-object in %s on line 64
NULL
int(1)

Warning: Cannot use a scalar value as an array in %s on line 68

Warning: Attempt to assign property 'p' of non-object in %s on line 68
NULL
int(1)

Warning: Cannot use a scalar value as an array in %s on line 72

Warning: Attempt to assign property 'p' of non-object in %s on line 72
NULL
int(1)

Warning: Cannot use a scalar value as an array in %s on line 76

Warning: Attempt to assign property 'p' of non-object in %s on line 76
NULL
int(1)
==float postcrement==

Warning: Cannot use a scalar value as an array in %s on line 14

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 14
NULL
float(1.1)

Warning: Cannot use a scalar value as an array in %s on line 18

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 18
NULL
float(1.1)
==float precrement==

Warning: Cannot use a scalar value as an array in %s on line 24

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 24
NULL
float(1.1)

Warning: Cannot use a scalar value as an array in %s on line 28

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 28
NULL
float(1.1)
==float assigning-string-cat==

Warning: Cannot use a scalar value as an array in %s on line 34

Warning: Attempt to assign property 'p' of non-object in %s on line 34
NULL
float(1.1)
==float assigning-arithmetic-op==

Warning: Cannot use a scalar value as an array in %s on line 40

Warning: Attempt to assign property 'p' of non-object in %s on line 40
NULL
float(1.1)

Warning: Cannot use a scalar value as an array in %s on line 44

Warning: Attempt to assign property 'p' of non-object in %s on line 44
NULL
float(1.1)

Warning: Cannot use a scalar value as an array in %s on line 48

Warning: Attempt to assign property 'p' of non-object in %s on line 48
NULL
float(1.1)

Warning: Cannot use a scalar value as an array in %s on line 52

Warning: Attempt to assign property 'p' of non-object in %s on line 52
NULL
float(1.1)

Warning: Cannot use a scalar value as an array in %s on line 56

Warning: Attempt to assign property 'p' of non-object in %s on line 56
NULL
float(1.1)

Warning: Cannot use a scalar value as an array in %s on line 60

Warning: Attempt to assign property 'p' of non-object in %s on line 60
NULL
float(1.1)

Warning: Cannot use a scalar value as an array in %s on line 64

Warning: Attempt to assign property 'p' of non-object in %s on line 64
NULL
float(1.1)

Warning: Cannot use a scalar value as an array in %s on line 68

Warning: Attempt to assign property 'p' of non-object in %s on line 68
NULL
float(1.1)

Warning: Cannot use a scalar value as an array in %s on line 72

Warning: Attempt to assign property 'p' of non-object in %s on line 72
NULL
float(1.1)

Warning: Cannot use a scalar value as an array in %s on line 76

Warning: Attempt to assign property 'p' of non-object in %s on line 76
NULL
float(1.1)
==resource postcrement==

Warning: Cannot use a scalar value as an array in %s on line 14

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 14
NULL
resource(5) of type (stream)

Warning: Cannot use a scalar value as an array in %s on line 18

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 18
NULL
resource(5) of type (stream)
==resource precrement==

Warning: Cannot use a scalar value as an array in %s on line 24

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 24
NULL
resource(5) of type (stream)

Warning: Cannot use a scalar value as an array in %s on line 28

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 28
NULL
resource(5) of type (stream)
==resource assigning-string-cat==

Warning: Cannot use a scalar value as an array in %s on line 34

Warning: Attempt to assign property 'p' of non-object in %s on line 34
NULL
resource(5) of type (stream)
==resource assigning-arithmetic-op==

Warning: Cannot use a scalar value as an array in %s on line 40

Warning: Attempt to assign property 'p' of non-object in %s on line 40
NULL
resource(5) of type (stream)

Warning: Cannot use a scalar value as an array in %s on line 44

Warning: Attempt to assign property 'p' of non-object in %s on line 44
NULL
resource(5) of type (stream)

Warning: Cannot use a scalar value as an array in %s on line 48

Warning: Attempt to assign property 'p' of non-object in %s on line 48
NULL
resource(5) of type (stream)

Warning: Cannot use a scalar value as an array in %s on line 52

Warning: Attempt to assign property 'p' of non-object in %s on line 52
NULL
resource(5) of type (stream)

Warning: Cannot use a scalar value as an array in %s on line 56

Warning: Attempt to assign property 'p' of non-object in %s on line 56
NULL
resource(5) of type (stream)

Warning: Cannot use a scalar value as an array in %s on line 60

Warning: Attempt to assign property 'p' of non-object in %s on line 60
NULL
resource(5) of type (stream)

Warning: Cannot use a scalar value as an array in %s on line 64

Warning: Attempt to assign property 'p' of non-object in %s on line 64
NULL
resource(5) of type (stream)

Warning: Cannot use a scalar value as an array in %s on line 68

Warning: Attempt to assign property 'p' of non-object in %s on line 68
NULL
resource(5) of type (stream)

Warning: Cannot use a scalar value as an array in %s on line 72

Warning: Attempt to assign property 'p' of non-object in %s on line 72
NULL
resource(5) of type (stream)

Warning: Cannot use a scalar value as an array in %s on line 76

Warning: Attempt to assign property 'p' of non-object in %s on line 76
NULL
resource(5) of type (stream)
