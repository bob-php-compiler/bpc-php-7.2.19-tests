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
    echo "==$k postcrement==\n";

    $a = $v;
    var_dump($a->prop[new stdclass]->p[0]++);
    var_dump($a);

    $a = $v;
    var_dump($a->prop[new stdclass]->p[0]--);
    var_dump($a);

    echo "==$k precrement==\n";

    $a = $v;
    var_dump(++$a->prop[new stdclass]->p[0]);
    var_dump($a);

    $a = $v;
    var_dump(--$a->prop[new stdclass]->p[0]);
    var_dump($a);

    echo "==$k assigning-string-cat==\n";

    $a = $v;
    var_dump($a->prop[new stdclass]->p[0] .= 'A');
    var_dump($a);

    echo "==$k assigning-arithmetic-op==\n";

    $a = $v;
    var_dump($a->prop[new stdclass]->p[0] += 2);
    var_dump($a);

    $a = $v;
    var_dump($a->prop[new stdclass]->p[0] -= 2);
    var_dump($a);

    $a = $v;
    var_dump($a->prop[new stdclass]->p[0] *= 2);
    var_dump($a);

    $a = $v;
    var_dump($a->prop[new stdclass]->p[0] /= 2);
    var_dump($a);

    $a = $v;
    var_dump($a->prop[new stdclass]->p[0] %= 2);
    var_dump($a);

    $a = $v;
    var_dump($a->prop[new stdclass]->p[0] **= 2);
    var_dump($a);

    $a = $v;
    var_dump($a->prop[new stdclass]->p[0] <<= 2);
    var_dump($a);

    $a = $v;
    var_dump($a->prop[new stdclass]->p[0] |= 2);
    var_dump($a);

    $a = $v;
    var_dump($a->prop[new stdclass]->p[0] ^= 2);
    var_dump($a);

    $a = $v;
    var_dump($a->prop[new stdclass]->p[0] &= 2);
    var_dump($a);
}
?>
--EXPECTF--
==true postcrement==

Warning: Attempt to modify property 'prop' of non-object in %s on line 16
NULL
bool(true)

Warning: Attempt to modify property 'prop' of non-object in %s on line 20
NULL
bool(true)
==true precrement==

Warning: Attempt to modify property 'prop' of non-object in %s on line 26
NULL
bool(true)

Warning: Attempt to modify property 'prop' of non-object in %s on line 30
NULL
bool(true)
==true assigning-string-cat==

Warning: Attempt to modify property 'prop' of non-object in %s on line 36
NULL
bool(true)
==true assigning-arithmetic-op==

Warning: Attempt to modify property 'prop' of non-object in %s on line 42
NULL
bool(true)

Warning: Attempt to modify property 'prop' of non-object in %s on line 46
NULL
bool(true)

Warning: Attempt to modify property 'prop' of non-object in %s on line 50
NULL
bool(true)

Warning: Attempt to modify property 'prop' of non-object in %s on line 54
NULL
bool(true)

Warning: Attempt to modify property 'prop' of non-object in %s on line 58
NULL
bool(true)

Warning: Attempt to modify property 'prop' of non-object in %s on line 62
NULL
bool(true)

Warning: Attempt to modify property 'prop' of non-object in %s on line 66
NULL
bool(true)

Warning: Attempt to modify property 'prop' of non-object in %s on line 70
NULL
bool(true)

Warning: Attempt to modify property 'prop' of non-object in %s on line 74
NULL
bool(true)

Warning: Attempt to modify property 'prop' of non-object in %s on line 78
NULL
bool(true)
==int postcrement==

Warning: Attempt to modify property 'prop' of non-object in %s on line 16
NULL
int(1)

Warning: Attempt to modify property 'prop' of non-object in %s on line 20
NULL
int(1)
==int precrement==

Warning: Attempt to modify property 'prop' of non-object in %s on line 26
NULL
int(1)

Warning: Attempt to modify property 'prop' of non-object in %s on line 30
NULL
int(1)
==int assigning-string-cat==

Warning: Attempt to modify property 'prop' of non-object in %s on line 36
NULL
int(1)
==int assigning-arithmetic-op==

Warning: Attempt to modify property 'prop' of non-object in %s on line 42
NULL
int(1)

Warning: Attempt to modify property 'prop' of non-object in %s on line 46
NULL
int(1)

Warning: Attempt to modify property 'prop' of non-object in %s on line 50
NULL
int(1)

Warning: Attempt to modify property 'prop' of non-object in %s on line 54
NULL
int(1)

Warning: Attempt to modify property 'prop' of non-object in %s on line 58
NULL
int(1)

Warning: Attempt to modify property 'prop' of non-object in %s on line 62
NULL
int(1)

Warning: Attempt to modify property 'prop' of non-object in %s on line 66
NULL
int(1)

Warning: Attempt to modify property 'prop' of non-object in %s on line 70
NULL
int(1)

Warning: Attempt to modify property 'prop' of non-object in %s on line 74
NULL
int(1)

Warning: Attempt to modify property 'prop' of non-object in %s on line 78
NULL
int(1)
==float postcrement==

Warning: Attempt to modify property 'prop' of non-object in %s on line 16
NULL
float(1.1)

Warning: Attempt to modify property 'prop' of non-object in %s on line 20
NULL
float(1.1)
==float precrement==

Warning: Attempt to modify property 'prop' of non-object in %s on line 26
NULL
float(1.1)

Warning: Attempt to modify property 'prop' of non-object in %s on line 30
NULL
float(1.1)
==float assigning-string-cat==

Warning: Attempt to modify property 'prop' of non-object in %s on line 36
NULL
float(1.1)
==float assigning-arithmetic-op==

Warning: Attempt to modify property 'prop' of non-object in %s on line 42
NULL
float(1.1)

Warning: Attempt to modify property 'prop' of non-object in %s on line 46
NULL
float(1.1)

Warning: Attempt to modify property 'prop' of non-object in %s on line 50
NULL
float(1.1)

Warning: Attempt to modify property 'prop' of non-object in %s on line 54
NULL
float(1.1)

Warning: Attempt to modify property 'prop' of non-object in %s on line 58
NULL
float(1.1)

Warning: Attempt to modify property 'prop' of non-object in %s on line 62
NULL
float(1.1)

Warning: Attempt to modify property 'prop' of non-object in %s on line 66
NULL
float(1.1)

Warning: Attempt to modify property 'prop' of non-object in %s on line 70
NULL
float(1.1)

Warning: Attempt to modify property 'prop' of non-object in %s on line 74
NULL
float(1.1)

Warning: Attempt to modify property 'prop' of non-object in %s on line 78
NULL
float(1.1)
==non_empty_string postcrement==

Warning: Attempt to modify property 'prop' of non-object in %s on line 16
NULL
string(6) "string"

Warning: Attempt to modify property 'prop' of non-object in %s on line 20
NULL
string(6) "string"
==non_empty_string precrement==

Warning: Attempt to modify property 'prop' of non-object in %s on line 26
NULL
string(6) "string"

Warning: Attempt to modify property 'prop' of non-object in %s on line 30
NULL
string(6) "string"
==non_empty_string assigning-string-cat==

Warning: Attempt to modify property 'prop' of non-object in %s on line 36
NULL
string(6) "string"
==non_empty_string assigning-arithmetic-op==

Warning: Attempt to modify property 'prop' of non-object in %s on line 42
NULL
string(6) "string"

Warning: Attempt to modify property 'prop' of non-object in %s on line 46
NULL
string(6) "string"

Warning: Attempt to modify property 'prop' of non-object in %s on line 50
NULL
string(6) "string"

Warning: Attempt to modify property 'prop' of non-object in %s on line 54
NULL
string(6) "string"

Warning: Attempt to modify property 'prop' of non-object in %s on line 58
NULL
string(6) "string"

Warning: Attempt to modify property 'prop' of non-object in %s on line 62
NULL
string(6) "string"

Warning: Attempt to modify property 'prop' of non-object in %s on line 66
NULL
string(6) "string"

Warning: Attempt to modify property 'prop' of non-object in %s on line 70
NULL
string(6) "string"

Warning: Attempt to modify property 'prop' of non-object in %s on line 74
NULL
string(6) "string"

Warning: Attempt to modify property 'prop' of non-object in %s on line 78
NULL
string(6) "string"
==array postcrement==

Warning: Attempt to modify property 'prop' of non-object in %s on line 16
NULL
array(0) {
}

Warning: Attempt to modify property 'prop' of non-object in %s on line 20
NULL
array(0) {
}
==array precrement==

Warning: Attempt to modify property 'prop' of non-object in %s on line 26
NULL
array(0) {
}

Warning: Attempt to modify property 'prop' of non-object in %s on line 30
NULL
array(0) {
}
==array assigning-string-cat==

Warning: Attempt to modify property 'prop' of non-object in %s on line 36
NULL
array(0) {
}
==array assigning-arithmetic-op==

Warning: Attempt to modify property 'prop' of non-object in %s on line 42
NULL
array(0) {
}

Warning: Attempt to modify property 'prop' of non-object in %s on line 46
NULL
array(0) {
}

Warning: Attempt to modify property 'prop' of non-object in %s on line 50
NULL
array(0) {
}

Warning: Attempt to modify property 'prop' of non-object in %s on line 54
NULL
array(0) {
}

Warning: Attempt to modify property 'prop' of non-object in %s on line 58
NULL
array(0) {
}

Warning: Attempt to modify property 'prop' of non-object in %s on line 62
NULL
array(0) {
}

Warning: Attempt to modify property 'prop' of non-object in %s on line 66
NULL
array(0) {
}

Warning: Attempt to modify property 'prop' of non-object in %s on line 70
NULL
array(0) {
}

Warning: Attempt to modify property 'prop' of non-object in %s on line 74
NULL
array(0) {
}

Warning: Attempt to modify property 'prop' of non-object in %s on line 78
NULL
array(0) {
}
==resource postcrement==

Warning: Attempt to modify property 'prop' of non-object in %s on line 16
NULL
resource(%d) of type (stream)

Warning: Attempt to modify property 'prop' of non-object in %s on line 20
NULL
resource(%d) of type (stream)
==resource precrement==

Warning: Attempt to modify property 'prop' of non-object in %s on line 26
NULL
resource(%d) of type (stream)

Warning: Attempt to modify property 'prop' of non-object in %s on line 30
NULL
resource(%d) of type (stream)
==resource assigning-string-cat==

Warning: Attempt to modify property 'prop' of non-object in %s on line 36
NULL
resource(%d) of type (stream)
==resource assigning-arithmetic-op==

Warning: Attempt to modify property 'prop' of non-object in %s on line 42
NULL
resource(%d) of type (stream)

Warning: Attempt to modify property 'prop' of non-object in %s on line 46
NULL
resource(%d) of type (stream)

Warning: Attempt to modify property 'prop' of non-object in %s on line 50
NULL
resource(%d) of type (stream)

Warning: Attempt to modify property 'prop' of non-object in %s on line 54
NULL
resource(%d) of type (stream)

Warning: Attempt to modify property 'prop' of non-object in %s on line 58
NULL
resource(%d) of type (stream)

Warning: Attempt to modify property 'prop' of non-object in %s on line 62
NULL
resource(%d) of type (stream)

Warning: Attempt to modify property 'prop' of non-object in %s on line 66
NULL
resource(%d) of type (stream)

Warning: Attempt to modify property 'prop' of non-object in %s on line 70
NULL
resource(%d) of type (stream)

Warning: Attempt to modify property 'prop' of non-object in %s on line 74
NULL
resource(%d) of type (stream)

Warning: Attempt to modify property 'prop' of non-object in %s on line 78
NULL
resource(%d) of type (stream)
