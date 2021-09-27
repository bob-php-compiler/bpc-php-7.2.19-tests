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

foreach ($arr as $k => $a) {
    echo "==$k postcrement==\n";

    var_dump($a->q[][]->p++);
    var_dump($a);

    var_dump($a->q[][]->p--);
    var_dump($a);

    echo "==$k precrement==\n";

    var_dump(++$a->q[][]->p);
    var_dump($a);

    var_dump(--$a->q[][]->p);
    var_dump($a);

    echo "==$k assigning-string-cat==\n";

    var_dump($a->q[][]->p .= 'A');
    var_dump($a);

    echo "==$k assigning-arithmetic-op==\n";

    var_dump($a->q[][]->p += 2);
    var_dump($a);

    var_dump($a->q[][]->p -= 2);
    var_dump($a);

    var_dump($a->q[][]->p *= 2);
    var_dump($a);

    var_dump($a->q[][]->p /= 2);
    var_dump($a);

    var_dump($a->q[][]->p %= 2);
    var_dump($a);

    var_dump($a->q[][]->p **= 2);
    var_dump($a);

    var_dump($a->q[][]->p <<= 2);
    var_dump($a);

    var_dump($a->q[][]->p |= 2);
    var_dump($a);

    var_dump($a->q[][]->p ^= 2);
    var_dump($a);

    var_dump($a->q[][]->p &= 2);
    var_dump($a);
}
?>
--EXPECTF--
==true postcrement==

Warning: Attempt to modify property 'q' of non-object in %s on line 15

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 15
NULL
bool(true)

Warning: Attempt to modify property 'q' of non-object in %s on line 18

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 18
NULL
bool(true)
==true precrement==

Warning: Attempt to modify property 'q' of non-object in %s on line 23

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 23
NULL
bool(true)

Warning: Attempt to modify property 'q' of non-object in %s on line 26

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 26
NULL
bool(true)
==true assigning-string-cat==

Warning: Attempt to modify property 'q' of non-object in %s on line 31

Warning: Attempt to assign property 'p' of non-object in %s on line 31
NULL
bool(true)
==true assigning-arithmetic-op==

Warning: Attempt to modify property 'q' of non-object in %s on line 36

Warning: Attempt to assign property 'p' of non-object in %s on line 36
NULL
bool(true)

Warning: Attempt to modify property 'q' of non-object in %s on line 39

Warning: Attempt to assign property 'p' of non-object in %s on line 39
NULL
bool(true)

Warning: Attempt to modify property 'q' of non-object in %s on line 42

Warning: Attempt to assign property 'p' of non-object in %s on line 42
NULL
bool(true)

Warning: Attempt to modify property 'q' of non-object in %s on line 45

Warning: Attempt to assign property 'p' of non-object in %s on line 45
NULL
bool(true)

Warning: Attempt to modify property 'q' of non-object in %s on line 48

Warning: Attempt to assign property 'p' of non-object in %s on line 48
NULL
bool(true)

Warning: Attempt to modify property 'q' of non-object in %s on line 51

Warning: Attempt to assign property 'p' of non-object in %s on line 51
NULL
bool(true)

Warning: Attempt to modify property 'q' of non-object in %s on line 54

Warning: Attempt to assign property 'p' of non-object in %s on line 54
NULL
bool(true)

Warning: Attempt to modify property 'q' of non-object in %s on line 57

Warning: Attempt to assign property 'p' of non-object in %s on line 57
NULL
bool(true)

Warning: Attempt to modify property 'q' of non-object in %s on line 60

Warning: Attempt to assign property 'p' of non-object in %s on line 60
NULL
bool(true)

Warning: Attempt to modify property 'q' of non-object in %s on line 63

Warning: Attempt to assign property 'p' of non-object in %s on line 63
NULL
bool(true)
==int postcrement==

Warning: Attempt to modify property 'q' of non-object in %s on line 15

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 15
NULL
int(1)

Warning: Attempt to modify property 'q' of non-object in %s on line 18

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 18
NULL
int(1)
==int precrement==

Warning: Attempt to modify property 'q' of non-object in %s on line 23

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 23
NULL
int(1)

Warning: Attempt to modify property 'q' of non-object in %s on line 26

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 26
NULL
int(1)
==int assigning-string-cat==

Warning: Attempt to modify property 'q' of non-object in %s on line 31

Warning: Attempt to assign property 'p' of non-object in %s on line 31
NULL
int(1)
==int assigning-arithmetic-op==

Warning: Attempt to modify property 'q' of non-object in %s on line 36

Warning: Attempt to assign property 'p' of non-object in %s on line 36
NULL
int(1)

Warning: Attempt to modify property 'q' of non-object in %s on line 39

Warning: Attempt to assign property 'p' of non-object in %s on line 39
NULL
int(1)

Warning: Attempt to modify property 'q' of non-object in %s on line 42

Warning: Attempt to assign property 'p' of non-object in %s on line 42
NULL
int(1)

Warning: Attempt to modify property 'q' of non-object in %s on line 45

Warning: Attempt to assign property 'p' of non-object in %s on line 45
NULL
int(1)

Warning: Attempt to modify property 'q' of non-object in %s on line 48

Warning: Attempt to assign property 'p' of non-object in %s on line 48
NULL
int(1)

Warning: Attempt to modify property 'q' of non-object in %s on line 51

Warning: Attempt to assign property 'p' of non-object in %s on line 51
NULL
int(1)

Warning: Attempt to modify property 'q' of non-object in %s on line 54

Warning: Attempt to assign property 'p' of non-object in %s on line 54
NULL
int(1)

Warning: Attempt to modify property 'q' of non-object in %s on line 57

Warning: Attempt to assign property 'p' of non-object in %s on line 57
NULL
int(1)

Warning: Attempt to modify property 'q' of non-object in %s on line 60

Warning: Attempt to assign property 'p' of non-object in %s on line 60
NULL
int(1)

Warning: Attempt to modify property 'q' of non-object in %s on line 63

Warning: Attempt to assign property 'p' of non-object in %s on line 63
NULL
int(1)
==float postcrement==

Warning: Attempt to modify property 'q' of non-object in %s on line 15

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 15
NULL
float(1.1)

Warning: Attempt to modify property 'q' of non-object in %s on line 18

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 18
NULL
float(1.1)
==float precrement==

Warning: Attempt to modify property 'q' of non-object in %s on line 23

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 23
NULL
float(1.1)

Warning: Attempt to modify property 'q' of non-object in %s on line 26

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 26
NULL
float(1.1)
==float assigning-string-cat==

Warning: Attempt to modify property 'q' of non-object in %s on line 31

Warning: Attempt to assign property 'p' of non-object in %s on line 31
NULL
float(1.1)
==float assigning-arithmetic-op==

Warning: Attempt to modify property 'q' of non-object in %s on line 36

Warning: Attempt to assign property 'p' of non-object in %s on line 36
NULL
float(1.1)

Warning: Attempt to modify property 'q' of non-object in %s on line 39

Warning: Attempt to assign property 'p' of non-object in %s on line 39
NULL
float(1.1)

Warning: Attempt to modify property 'q' of non-object in %s on line 42

Warning: Attempt to assign property 'p' of non-object in %s on line 42
NULL
float(1.1)

Warning: Attempt to modify property 'q' of non-object in %s on line 45

Warning: Attempt to assign property 'p' of non-object in %s on line 45
NULL
float(1.1)

Warning: Attempt to modify property 'q' of non-object in %s on line 48

Warning: Attempt to assign property 'p' of non-object in %s on line 48
NULL
float(1.1)

Warning: Attempt to modify property 'q' of non-object in %s on line 51

Warning: Attempt to assign property 'p' of non-object in %s on line 51
NULL
float(1.1)

Warning: Attempt to modify property 'q' of non-object in %s on line 54

Warning: Attempt to assign property 'p' of non-object in %s on line 54
NULL
float(1.1)

Warning: Attempt to modify property 'q' of non-object in %s on line 57

Warning: Attempt to assign property 'p' of non-object in %s on line 57
NULL
float(1.1)

Warning: Attempt to modify property 'q' of non-object in %s on line 60

Warning: Attempt to assign property 'p' of non-object in %s on line 60
NULL
float(1.1)

Warning: Attempt to modify property 'q' of non-object in %s on line 63

Warning: Attempt to assign property 'p' of non-object in %s on line 63
NULL
float(1.1)
==non_empty_string postcrement==

Warning: Attempt to modify property 'q' of non-object in %s on line 15

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 15
NULL
string(6) "string"

Warning: Attempt to modify property 'q' of non-object in %s on line 18

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 18
NULL
string(6) "string"
==non_empty_string precrement==

Warning: Attempt to modify property 'q' of non-object in %s on line 23

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 23
NULL
string(6) "string"

Warning: Attempt to modify property 'q' of non-object in %s on line 26

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 26
NULL
string(6) "string"
==non_empty_string assigning-string-cat==

Warning: Attempt to modify property 'q' of non-object in %s on line 31

Warning: Attempt to assign property 'p' of non-object in %s on line 31
NULL
string(6) "string"
==non_empty_string assigning-arithmetic-op==

Warning: Attempt to modify property 'q' of non-object in %s on line 36

Warning: Attempt to assign property 'p' of non-object in %s on line 36
NULL
string(6) "string"

Warning: Attempt to modify property 'q' of non-object in %s on line 39

Warning: Attempt to assign property 'p' of non-object in %s on line 39
NULL
string(6) "string"

Warning: Attempt to modify property 'q' of non-object in %s on line 42

Warning: Attempt to assign property 'p' of non-object in %s on line 42
NULL
string(6) "string"

Warning: Attempt to modify property 'q' of non-object in %s on line 45

Warning: Attempt to assign property 'p' of non-object in %s on line 45
NULL
string(6) "string"

Warning: Attempt to modify property 'q' of non-object in %s on line 48

Warning: Attempt to assign property 'p' of non-object in %s on line 48
NULL
string(6) "string"

Warning: Attempt to modify property 'q' of non-object in %s on line 51

Warning: Attempt to assign property 'p' of non-object in %s on line 51
NULL
string(6) "string"

Warning: Attempt to modify property 'q' of non-object in %s on line 54

Warning: Attempt to assign property 'p' of non-object in %s on line 54
NULL
string(6) "string"

Warning: Attempt to modify property 'q' of non-object in %s on line 57

Warning: Attempt to assign property 'p' of non-object in %s on line 57
NULL
string(6) "string"

Warning: Attempt to modify property 'q' of non-object in %s on line 60

Warning: Attempt to assign property 'p' of non-object in %s on line 60
NULL
string(6) "string"

Warning: Attempt to modify property 'q' of non-object in %s on line 63

Warning: Attempt to assign property 'p' of non-object in %s on line 63
NULL
string(6) "string"
==array postcrement==

Warning: Attempt to modify property 'q' of non-object in %s on line 15

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 15
NULL
array(0) {
}

Warning: Attempt to modify property 'q' of non-object in %s on line 18

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 18
NULL
array(0) {
}
==array precrement==

Warning: Attempt to modify property 'q' of non-object in %s on line 23

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 23
NULL
array(0) {
}

Warning: Attempt to modify property 'q' of non-object in %s on line 26

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 26
NULL
array(0) {
}
==array assigning-string-cat==

Warning: Attempt to modify property 'q' of non-object in %s on line 31

Warning: Attempt to assign property 'p' of non-object in %s on line 31
NULL
array(0) {
}
==array assigning-arithmetic-op==

Warning: Attempt to modify property 'q' of non-object in %s on line 36

Warning: Attempt to assign property 'p' of non-object in %s on line 36
NULL
array(0) {
}

Warning: Attempt to modify property 'q' of non-object in %s on line 39

Warning: Attempt to assign property 'p' of non-object in %s on line 39
NULL
array(0) {
}

Warning: Attempt to modify property 'q' of non-object in %s on line 42

Warning: Attempt to assign property 'p' of non-object in %s on line 42
NULL
array(0) {
}

Warning: Attempt to modify property 'q' of non-object in %s on line 45

Warning: Attempt to assign property 'p' of non-object in %s on line 45
NULL
array(0) {
}

Warning: Attempt to modify property 'q' of non-object in %s on line 48

Warning: Attempt to assign property 'p' of non-object in %s on line 48
NULL
array(0) {
}

Warning: Attempt to modify property 'q' of non-object in %s on line 51

Warning: Attempt to assign property 'p' of non-object in %s on line 51
NULL
array(0) {
}

Warning: Attempt to modify property 'q' of non-object in %s on line 54

Warning: Attempt to assign property 'p' of non-object in %s on line 54
NULL
array(0) {
}

Warning: Attempt to modify property 'q' of non-object in %s on line 57

Warning: Attempt to assign property 'p' of non-object in %s on line 57
NULL
array(0) {
}

Warning: Attempt to modify property 'q' of non-object in %s on line 60

Warning: Attempt to assign property 'p' of non-object in %s on line 60
NULL
array(0) {
}

Warning: Attempt to modify property 'q' of non-object in %s on line 63

Warning: Attempt to assign property 'p' of non-object in %s on line 63
NULL
array(0) {
}
==resource postcrement==

Warning: Attempt to modify property 'q' of non-object in %s on line 15

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 15
NULL
resource(5) of type (stream)

Warning: Attempt to modify property 'q' of non-object in %s on line 18

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 18
NULL
resource(5) of type (stream)
==resource precrement==

Warning: Attempt to modify property 'q' of non-object in %s on line 23

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 23
NULL
resource(5) of type (stream)

Warning: Attempt to modify property 'q' of non-object in %s on line 26

Warning: Attempt to increment/decrement property 'p' of non-object in %s on line 26
NULL
resource(5) of type (stream)
==resource assigning-string-cat==

Warning: Attempt to modify property 'q' of non-object in %s on line 31

Warning: Attempt to assign property 'p' of non-object in %s on line 31
NULL
resource(5) of type (stream)
==resource assigning-arithmetic-op==

Warning: Attempt to modify property 'q' of non-object in %s on line 36

Warning: Attempt to assign property 'p' of non-object in %s on line 36
NULL
resource(5) of type (stream)

Warning: Attempt to modify property 'q' of non-object in %s on line 39

Warning: Attempt to assign property 'p' of non-object in %s on line 39
NULL
resource(5) of type (stream)

Warning: Attempt to modify property 'q' of non-object in %s on line 42

Warning: Attempt to assign property 'p' of non-object in %s on line 42
NULL
resource(5) of type (stream)

Warning: Attempt to modify property 'q' of non-object in %s on line 45

Warning: Attempt to assign property 'p' of non-object in %s on line 45
NULL
resource(5) of type (stream)

Warning: Attempt to modify property 'q' of non-object in %s on line 48

Warning: Attempt to assign property 'p' of non-object in %s on line 48
NULL
resource(5) of type (stream)

Warning: Attempt to modify property 'q' of non-object in %s on line 51

Warning: Attempt to assign property 'p' of non-object in %s on line 51
NULL
resource(5) of type (stream)

Warning: Attempt to modify property 'q' of non-object in %s on line 54

Warning: Attempt to assign property 'p' of non-object in %s on line 54
NULL
resource(5) of type (stream)

Warning: Attempt to modify property 'q' of non-object in %s on line 57

Warning: Attempt to assign property 'p' of non-object in %s on line 57
NULL
resource(5) of type (stream)

Warning: Attempt to modify property 'q' of non-object in %s on line 60

Warning: Attempt to assign property 'p' of non-object in %s on line 60
NULL
resource(5) of type (stream)

Warning: Attempt to modify property 'q' of non-object in %s on line 63

Warning: Attempt to assign property 'p' of non-object in %s on line 63
NULL
resource(5) of type (stream)
