--TEST--
assigning tests
--FILE--
<?php

$arr = array(
    'true'             => true,
    'int'              => 1,
    'float'            => 1.1,
    'non_empty_string' => 'string',
    'array'            => array(),
    'resource'         => fopen('/proc/self/comm', 'r')
);

foreach ($arr as $k => $v) {
    echo "==postcrement==\n";

    $a = $k;
    var_dump($a->p->q[0]++);
    var_dump($a);

    $a = $k;
    var_dump($a->p->q[0]--);
    var_dump($a);

    echo "==precrement==\n";

    $a = $k;
    var_dump(++$a->p->q[0]);
    var_dump($a);

    $a = $k;
    var_dump(--$a->p->q[0]);
    var_dump($a);

    echo "==assigning-string-cat==\n";

    $a = $k;
    var_dump($a->p->q[0] .= 'A');
    var_dump($a);

    echo "==assigning-arithmetic-op==\n";

    $a = $k;
    var_dump($a->p->q[0] += 2);
    var_dump($a);

    $a = $k;
    var_dump($a->p->q[0] -= 2);
    var_dump($a);

    $a = $k;
    var_dump($a->p->q[0] *= 2);
    var_dump($a);

    $a = $k;
    var_dump($a->p->q[0] /= 2);
    var_dump($a);

    $a = $k;
    var_dump($a->p->q[0] %= 2);
    var_dump($a);

    $a = $k;
    var_dump($a->p->q[0] **= 2);
    var_dump($a);

    $a = $k;
    var_dump($a->p->q[0] <<= 2);
    var_dump($a);

    $a = $k;
    var_dump($a->p->q[0] |= 2);
    var_dump($a);

    $a = $k;
    var_dump($a->p->q[0] ^= 2);
    var_dump($a);

    $a = $k;
    var_dump($a->p->q[0] &= 2);
    var_dump($a);
}
?>
--EXPECTF--
==postcrement==

Warning: Attempt to modify property 'p' of non-object in %s on line 16
NULL
string(4) "true"

Warning: Attempt to modify property 'p' of non-object in %s on line 20
NULL
string(4) "true"
==precrement==

Warning: Attempt to modify property 'p' of non-object in %s on line 26
NULL
string(4) "true"

Warning: Attempt to modify property 'p' of non-object in %s on line 30
NULL
string(4) "true"
==assigning-string-cat==

Warning: Attempt to modify property 'p' of non-object in %s on line 36
NULL
string(4) "true"
==assigning-arithmetic-op==

Warning: Attempt to modify property 'p' of non-object in %s on line 42
NULL
string(4) "true"

Warning: Attempt to modify property 'p' of non-object in %s on line 46
NULL
string(4) "true"

Warning: Attempt to modify property 'p' of non-object in %s on line 50
NULL
string(4) "true"

Warning: Attempt to modify property 'p' of non-object in %s on line 54
NULL
string(4) "true"

Warning: Attempt to modify property 'p' of non-object in %s on line 58
NULL
string(4) "true"

Warning: Attempt to modify property 'p' of non-object in %s on line 62
NULL
string(4) "true"

Warning: Attempt to modify property 'p' of non-object in %s on line 66
NULL
string(4) "true"

Warning: Attempt to modify property 'p' of non-object in %s on line 70
NULL
string(4) "true"

Warning: Attempt to modify property 'p' of non-object in %s on line 74
NULL
string(4) "true"

Warning: Attempt to modify property 'p' of non-object in %s on line 78
NULL
string(4) "true"
==postcrement==

Warning: Attempt to modify property 'p' of non-object in %s on line 16
NULL
string(3) "int"

Warning: Attempt to modify property 'p' of non-object in %s on line 20
NULL
string(3) "int"
==precrement==

Warning: Attempt to modify property 'p' of non-object in %s on line 26
NULL
string(3) "int"

Warning: Attempt to modify property 'p' of non-object in %s on line 30
NULL
string(3) "int"
==assigning-string-cat==

Warning: Attempt to modify property 'p' of non-object in %s on line 36
NULL
string(3) "int"
==assigning-arithmetic-op==

Warning: Attempt to modify property 'p' of non-object in %s on line 42
NULL
string(3) "int"

Warning: Attempt to modify property 'p' of non-object in %s on line 46
NULL
string(3) "int"

Warning: Attempt to modify property 'p' of non-object in %s on line 50
NULL
string(3) "int"

Warning: Attempt to modify property 'p' of non-object in %s on line 54
NULL
string(3) "int"

Warning: Attempt to modify property 'p' of non-object in %s on line 58
NULL
string(3) "int"

Warning: Attempt to modify property 'p' of non-object in %s on line 62
NULL
string(3) "int"

Warning: Attempt to modify property 'p' of non-object in %s on line 66
NULL
string(3) "int"

Warning: Attempt to modify property 'p' of non-object in %s on line 70
NULL
string(3) "int"

Warning: Attempt to modify property 'p' of non-object in %s on line 74
NULL
string(3) "int"

Warning: Attempt to modify property 'p' of non-object in %s on line 78
NULL
string(3) "int"
==postcrement==

Warning: Attempt to modify property 'p' of non-object in %s on line 16
NULL
string(5) "float"

Warning: Attempt to modify property 'p' of non-object in %s on line 20
NULL
string(5) "float"
==precrement==

Warning: Attempt to modify property 'p' of non-object in %s on line 26
NULL
string(5) "float"

Warning: Attempt to modify property 'p' of non-object in %s on line 30
NULL
string(5) "float"
==assigning-string-cat==

Warning: Attempt to modify property 'p' of non-object in %s on line 36
NULL
string(5) "float"
==assigning-arithmetic-op==

Warning: Attempt to modify property 'p' of non-object in %s on line 42
NULL
string(5) "float"

Warning: Attempt to modify property 'p' of non-object in %s on line 46
NULL
string(5) "float"

Warning: Attempt to modify property 'p' of non-object in %s on line 50
NULL
string(5) "float"

Warning: Attempt to modify property 'p' of non-object in %s on line 54
NULL
string(5) "float"

Warning: Attempt to modify property 'p' of non-object in %s on line 58
NULL
string(5) "float"

Warning: Attempt to modify property 'p' of non-object in %s on line 62
NULL
string(5) "float"

Warning: Attempt to modify property 'p' of non-object in %s on line 66
NULL
string(5) "float"

Warning: Attempt to modify property 'p' of non-object in %s on line 70
NULL
string(5) "float"

Warning: Attempt to modify property 'p' of non-object in %s on line 74
NULL
string(5) "float"

Warning: Attempt to modify property 'p' of non-object in %s on line 78
NULL
string(5) "float"
==postcrement==

Warning: Attempt to modify property 'p' of non-object in %s on line 16
NULL
string(16) "non_empty_string"

Warning: Attempt to modify property 'p' of non-object in %s on line 20
NULL
string(16) "non_empty_string"
==precrement==

Warning: Attempt to modify property 'p' of non-object in %s on line 26
NULL
string(16) "non_empty_string"

Warning: Attempt to modify property 'p' of non-object in %s on line 30
NULL
string(16) "non_empty_string"
==assigning-string-cat==

Warning: Attempt to modify property 'p' of non-object in %s on line 36
NULL
string(16) "non_empty_string"
==assigning-arithmetic-op==

Warning: Attempt to modify property 'p' of non-object in %s on line 42
NULL
string(16) "non_empty_string"

Warning: Attempt to modify property 'p' of non-object in %s on line 46
NULL
string(16) "non_empty_string"

Warning: Attempt to modify property 'p' of non-object in %s on line 50
NULL
string(16) "non_empty_string"

Warning: Attempt to modify property 'p' of non-object in %s on line 54
NULL
string(16) "non_empty_string"

Warning: Attempt to modify property 'p' of non-object in %s on line 58
NULL
string(16) "non_empty_string"

Warning: Attempt to modify property 'p' of non-object in %s on line 62
NULL
string(16) "non_empty_string"

Warning: Attempt to modify property 'p' of non-object in %s on line 66
NULL
string(16) "non_empty_string"

Warning: Attempt to modify property 'p' of non-object in %s on line 70
NULL
string(16) "non_empty_string"

Warning: Attempt to modify property 'p' of non-object in %s on line 74
NULL
string(16) "non_empty_string"

Warning: Attempt to modify property 'p' of non-object in %s on line 78
NULL
string(16) "non_empty_string"
==postcrement==

Warning: Attempt to modify property 'p' of non-object in %s on line 16
NULL
string(5) "array"

Warning: Attempt to modify property 'p' of non-object in %s on line 20
NULL
string(5) "array"
==precrement==

Warning: Attempt to modify property 'p' of non-object in %s on line 26
NULL
string(5) "array"

Warning: Attempt to modify property 'p' of non-object in %s on line 30
NULL
string(5) "array"
==assigning-string-cat==

Warning: Attempt to modify property 'p' of non-object in %s on line 36
NULL
string(5) "array"
==assigning-arithmetic-op==

Warning: Attempt to modify property 'p' of non-object in %s on line 42
NULL
string(5) "array"

Warning: Attempt to modify property 'p' of non-object in %s on line 46
NULL
string(5) "array"

Warning: Attempt to modify property 'p' of non-object in %s on line 50
NULL
string(5) "array"

Warning: Attempt to modify property 'p' of non-object in %s on line 54
NULL
string(5) "array"

Warning: Attempt to modify property 'p' of non-object in %s on line 58
NULL
string(5) "array"

Warning: Attempt to modify property 'p' of non-object in %s on line 62
NULL
string(5) "array"

Warning: Attempt to modify property 'p' of non-object in %s on line 66
NULL
string(5) "array"

Warning: Attempt to modify property 'p' of non-object in %s on line 70
NULL
string(5) "array"

Warning: Attempt to modify property 'p' of non-object in %s on line 74
NULL
string(5) "array"

Warning: Attempt to modify property 'p' of non-object in %s on line 78
NULL
string(5) "array"
==postcrement==

Warning: Attempt to modify property 'p' of non-object in %s on line 16
NULL
string(8) "resource"

Warning: Attempt to modify property 'p' of non-object in %s on line 20
NULL
string(8) "resource"
==precrement==

Warning: Attempt to modify property 'p' of non-object in %s on line 26
NULL
string(8) "resource"

Warning: Attempt to modify property 'p' of non-object in %s on line 30
NULL
string(8) "resource"
==assigning-string-cat==

Warning: Attempt to modify property 'p' of non-object in %s on line 36
NULL
string(8) "resource"
==assigning-arithmetic-op==

Warning: Attempt to modify property 'p' of non-object in %s on line 42
NULL
string(8) "resource"

Warning: Attempt to modify property 'p' of non-object in %s on line 46
NULL
string(8) "resource"

Warning: Attempt to modify property 'p' of non-object in %s on line 50
NULL
string(8) "resource"

Warning: Attempt to modify property 'p' of non-object in %s on line 54
NULL
string(8) "resource"

Warning: Attempt to modify property 'p' of non-object in %s on line 58
NULL
string(8) "resource"

Warning: Attempt to modify property 'p' of non-object in %s on line 62
NULL
string(8) "resource"

Warning: Attempt to modify property 'p' of non-object in %s on line 66
NULL
string(8) "resource"

Warning: Attempt to modify property 'p' of non-object in %s on line 70
NULL
string(8) "resource"

Warning: Attempt to modify property 'p' of non-object in %s on line 74
NULL
string(8) "resource"

Warning: Attempt to modify property 'p' of non-object in %s on line 78
NULL
string(8) "resource"
