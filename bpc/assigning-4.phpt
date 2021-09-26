--TEST--
assigning tests
--FILE--
<?php

function ret_null()
{}

function ret_false()
{
    return false;
}

function ret_empty_string()
{
    return '';
}

$arr = array(
    'ret_null'         => 'ret_null',
    'ret_false'        => 'ret_false',
    'ret_empty_string' => 'ret_empty_string'
);

foreach ($arr as $k => $v) {
    echo "==$k postcrement==\n";

    $a = $v;
    var_dump($a()->p[0]++);
    var_dump($a);

    $a = $v;
    var_dump($a()->p[0]--);
    var_dump($a);

    echo "==$k precrement==\n";

    $a = $v;
    var_dump(++$a()->p[0]);
    var_dump($a);

    $a = $v;
    var_dump(--$a()->p[0]);
    var_dump($a);

    echo "==$k assigning-string-cat==\n";

    $a = $v;
    var_dump($a()->p[0] .= 'A');
    var_dump($a);

    echo "==$k assigning-arithmetic-op==\n";

    $a = $v;
    var_dump($a()->p[0] += 2);
    var_dump($a);

    $a = $v;
    var_dump($a()->p[0] -= 2);
    var_dump($a);

    $a = $v;
    var_dump($a()->p[0] *= 2);
    var_dump($a);

    $a = $v;
    var_dump($a()->p[0] /= 2);
    var_dump($a);

    $a = $v;
    var_dump($a()->p[0] %= 2);
    var_dump($a);

    $a = $v;
    var_dump($a()->p[0] **= 2);
    var_dump($a);

    $a = $v;
    var_dump($a()->p[0] <<= 2);
    var_dump($a);

    $a = $v;
    var_dump($a()->p[0] |= 2);
    var_dump($a);

    $a = $v;
    var_dump($a()->p[0] ^= 2);
    var_dump($a);

    $a = $v;
    var_dump($a()->p[0] &= 2);
    var_dump($a);
}
?>
--EXPECTF--
==ret_null postcrement==

Notice: Undefined property: stdClass::$p in %s on line 26

Notice: Undefined offset: 0 in %s on line 26
NULL
string(8) "ret_null"

Notice: Undefined property: stdClass::$p in %s on line 30

Notice: Undefined offset: 0 in %s on line 30
NULL
string(8) "ret_null"
==ret_null precrement==

Notice: Undefined property: stdClass::$p in %s on line 36

Notice: Undefined offset: 0 in %s on line 36
int(1)
string(8) "ret_null"

Notice: Undefined property: stdClass::$p in %s on line 40

Notice: Undefined offset: 0 in %s on line 40
NULL
string(8) "ret_null"
==ret_null assigning-string-cat==

Notice: Undefined property: stdClass::$p in %s on line 46

Notice: Undefined offset: 0 in %s on line 46
string(1) "A"
string(8) "ret_null"
==ret_null assigning-arithmetic-op==

Notice: Undefined property: stdClass::$p in %s on line 52

Notice: Undefined offset: 0 in %s on line 52
int(2)
string(8) "ret_null"

Notice: Undefined property: stdClass::$p in %s on line 56

Notice: Undefined offset: 0 in %s on line 56
int(-2)
string(8) "ret_null"

Notice: Undefined property: stdClass::$p in %s on line 60

Notice: Undefined offset: 0 in %s on line 60
int(0)
string(8) "ret_null"

Notice: Undefined property: stdClass::$p in %s on line 64

Notice: Undefined offset: 0 in %s on line 64
int(0)
string(8) "ret_null"

Notice: Undefined property: stdClass::$p in %s on line 68

Notice: Undefined offset: 0 in %s on line 68
int(0)
string(8) "ret_null"

Notice: Undefined property: stdClass::$p in %s on line 72

Notice: Undefined offset: 0 in %s on line 72
int(0)
string(8) "ret_null"

Notice: Undefined property: stdClass::$p in %s on line 76

Notice: Undefined offset: 0 in %s on line 76
int(0)
string(8) "ret_null"

Notice: Undefined property: stdClass::$p in %s on line 80

Notice: Undefined offset: 0 in %s on line 80
int(2)
string(8) "ret_null"

Notice: Undefined property: stdClass::$p in %s on line 84

Notice: Undefined offset: 0 in %s on line 84
int(2)
string(8) "ret_null"

Notice: Undefined property: stdClass::$p in %s on line 88

Notice: Undefined offset: 0 in %s on line 88
int(0)
string(8) "ret_null"
==ret_false postcrement==

Notice: Undefined property: stdClass::$p in %s on line 26

Notice: Undefined offset: 0 in %s on line 26
NULL
string(9) "ret_false"

Notice: Undefined property: stdClass::$p in %s on line 30

Notice: Undefined offset: 0 in %s on line 30
NULL
string(9) "ret_false"
==ret_false precrement==

Notice: Undefined property: stdClass::$p in %s on line 36

Notice: Undefined offset: 0 in %s on line 36
int(1)
string(9) "ret_false"

Notice: Undefined property: stdClass::$p in %s on line 40

Notice: Undefined offset: 0 in %s on line 40
NULL
string(9) "ret_false"
==ret_false assigning-string-cat==

Notice: Undefined property: stdClass::$p in %s on line 46

Notice: Undefined offset: 0 in %s on line 46
string(1) "A"
string(9) "ret_false"
==ret_false assigning-arithmetic-op==

Notice: Undefined property: stdClass::$p in %s on line 52

Notice: Undefined offset: 0 in %s on line 52
int(2)
string(9) "ret_false"

Notice: Undefined property: stdClass::$p in %s on line 56

Notice: Undefined offset: 0 in %s on line 56
int(-2)
string(9) "ret_false"

Notice: Undefined property: stdClass::$p in %s on line 60

Notice: Undefined offset: 0 in %s on line 60
int(0)
string(9) "ret_false"

Notice: Undefined property: stdClass::$p in %s on line 64

Notice: Undefined offset: 0 in %s on line 64
int(0)
string(9) "ret_false"

Notice: Undefined property: stdClass::$p in %s on line 68

Notice: Undefined offset: 0 in %s on line 68
int(0)
string(9) "ret_false"

Notice: Undefined property: stdClass::$p in %s on line 72

Notice: Undefined offset: 0 in %s on line 72
int(0)
string(9) "ret_false"

Notice: Undefined property: stdClass::$p in %s on line 76

Notice: Undefined offset: 0 in %s on line 76
int(0)
string(9) "ret_false"

Notice: Undefined property: stdClass::$p in %s on line 80

Notice: Undefined offset: 0 in %s on line 80
int(2)
string(9) "ret_false"

Notice: Undefined property: stdClass::$p in %s on line 84

Notice: Undefined offset: 0 in %s on line 84
int(2)
string(9) "ret_false"

Notice: Undefined property: stdClass::$p in %s on line 88

Notice: Undefined offset: 0 in %s on line 88
int(0)
string(9) "ret_false"
==ret_empty_string postcrement==

Notice: Undefined property: stdClass::$p in %s on line 26

Notice: Undefined offset: 0 in %s on line 26
NULL
string(16) "ret_empty_string"

Notice: Undefined property: stdClass::$p in %s on line 30

Notice: Undefined offset: 0 in %s on line 30
NULL
string(16) "ret_empty_string"
==ret_empty_string precrement==

Notice: Undefined property: stdClass::$p in %s on line 36

Notice: Undefined offset: 0 in %s on line 36
int(1)
string(16) "ret_empty_string"

Notice: Undefined property: stdClass::$p in %s on line 40

Notice: Undefined offset: 0 in %s on line 40
NULL
string(16) "ret_empty_string"
==ret_empty_string assigning-string-cat==

Notice: Undefined property: stdClass::$p in %s on line 46

Notice: Undefined offset: 0 in %s on line 46
string(1) "A"
string(16) "ret_empty_string"
==ret_empty_string assigning-arithmetic-op==

Notice: Undefined property: stdClass::$p in %s on line 52

Notice: Undefined offset: 0 in %s on line 52
int(2)
string(16) "ret_empty_string"

Notice: Undefined property: stdClass::$p in %s on line 56

Notice: Undefined offset: 0 in %s on line 56
int(-2)
string(16) "ret_empty_string"

Notice: Undefined property: stdClass::$p in %s on line 60

Notice: Undefined offset: 0 in %s on line 60
int(0)
string(16) "ret_empty_string"

Notice: Undefined property: stdClass::$p in %s on line 64

Notice: Undefined offset: 0 in %s on line 64
int(0)
string(16) "ret_empty_string"

Notice: Undefined property: stdClass::$p in %s on line 68

Notice: Undefined offset: 0 in %s on line 68
int(0)
string(16) "ret_empty_string"

Notice: Undefined property: stdClass::$p in %s on line 72

Notice: Undefined offset: 0 in %s on line 72
int(0)
string(16) "ret_empty_string"

Notice: Undefined property: stdClass::$p in %s on line 76

Notice: Undefined offset: 0 in %s on line 76
int(0)
string(16) "ret_empty_string"

Notice: Undefined property: stdClass::$p in %s on line 80

Notice: Undefined offset: 0 in %s on line 80
int(2)
string(16) "ret_empty_string"

Notice: Undefined property: stdClass::$p in %s on line 84

Notice: Undefined offset: 0 in %s on line 84
int(2)
string(16) "ret_empty_string"

Notice: Undefined property: stdClass::$p in %s on line 88

Notice: Undefined offset: 0 in %s on line 88
int(0)
string(16) "ret_empty_string"
