--TEST--
assigning tests
--FILE--
<?php

echo "==postcrement==\n";

$a1 = array(1);
$a2 = array();
var_dump($a2[$a1[0]]++);
var_dump($a1, $a2);

$a1 = array(1);
$a2 = array();
var_dump($a2[$a1[0]]--);
var_dump($a1, $a2);

echo "==precrement==\n";

$a1 = array(1);
$a2 = array();
var_dump(++$a2[$a1[0]]);
var_dump($a1, $a2);

$a1 = array(1);
$a2 = array();
var_dump(--$a2[$a1[0]]);
var_dump($a1, $a2);

echo "==assigning-string-cat==\n";

$a1 = array(1);
$a2 = array();
var_dump($a2[$a1[0]] .= 'A');
var_dump($a1, $a2);

echo "==assigning-arithmetic-op==\n";

$a1 = array(1);
$a2 = array();
var_dump($a2[$a1[0]] += 2);
var_dump($a1, $a2);

$a1 = array(1);
$a2 = array();
var_dump($a2[$a1[0]] -= 2);
var_dump($a1, $a2);

$a1 = array(1);
$a2 = array();
var_dump($a2[$a1[0]] *= 2);
var_dump($a1, $a2);

$a1 = array(1);
$a2 = array();
var_dump($a2[$a1[0]] /= 2);
var_dump($a1, $a2);

$a1 = array(1);
$a2 = array();
var_dump($a2[$a1[0]] %= 2);
var_dump($a1, $a2);

$a1 = array(1);
$a2 = array();
var_dump($a2[$a1[0]] **= 2);
var_dump($a1, $a2);

$a1 = array(1);
$a2 = array();
var_dump($a2[$a1[0]] <<= 2);
var_dump($a1, $a2);

$a1 = array(1);
$a2 = array();
var_dump($a2[$a1[0]] |= 2);
var_dump($a1, $a2);

$a1 = array(1);
$a2 = array();
var_dump($a2[$a1[0]] ^= 2);
var_dump($a1, $a2);

$a1 = array(1);
$a2 = array();
var_dump($a2[$a1[0]] &= 2);
var_dump($a1, $a2);

?>
--EXPECTF--
==postcrement==

Notice: Undefined offset: 1 in %s on line 7
NULL
array(1) {
  [0]=>
  int(1)
}
array(1) {
  [1]=>
  int(1)
}

Notice: Undefined offset: 1 in %s on line 12
NULL
array(1) {
  [0]=>
  int(1)
}
array(1) {
  [1]=>
  NULL
}
==precrement==

Notice: Undefined offset: 1 in %s on line 19
int(1)
array(1) {
  [0]=>
  int(1)
}
array(1) {
  [1]=>
  int(1)
}

Notice: Undefined offset: 1 in %s on line 24
NULL
array(1) {
  [0]=>
  int(1)
}
array(1) {
  [1]=>
  NULL
}
==assigning-string-cat==

Notice: Undefined offset: 1 in %s on line 31
string(1) "A"
array(1) {
  [0]=>
  int(1)
}
array(1) {
  [1]=>
  string(1) "A"
}
==assigning-arithmetic-op==

Notice: Undefined offset: 1 in %s on line 38
int(2)
array(1) {
  [0]=>
  int(1)
}
array(1) {
  [1]=>
  int(2)
}

Notice: Undefined offset: 1 in %s on line 43
int(-2)
array(1) {
  [0]=>
  int(1)
}
array(1) {
  [1]=>
  int(-2)
}

Notice: Undefined offset: 1 in %s on line 48
int(0)
array(1) {
  [0]=>
  int(1)
}
array(1) {
  [1]=>
  int(0)
}

Notice: Undefined offset: 1 in %s on line 53
int(0)
array(1) {
  [0]=>
  int(1)
}
array(1) {
  [1]=>
  int(0)
}

Notice: Undefined offset: 1 in %s on line 58
int(0)
array(1) {
  [0]=>
  int(1)
}
array(1) {
  [1]=>
  int(0)
}

Notice: Undefined offset: 1 in %s on line 63
int(0)
array(1) {
  [0]=>
  int(1)
}
array(1) {
  [1]=>
  int(0)
}

Notice: Undefined offset: 1 in %s on line 68
int(0)
array(1) {
  [0]=>
  int(1)
}
array(1) {
  [1]=>
  int(0)
}

Notice: Undefined offset: 1 in %s on line 73
int(2)
array(1) {
  [0]=>
  int(1)
}
array(1) {
  [1]=>
  int(2)
}

Notice: Undefined offset: 1 in %s on line 78
int(2)
array(1) {
  [0]=>
  int(1)
}
array(1) {
  [1]=>
  int(2)
}

Notice: Undefined offset: 1 in %s on line 83
int(0)
array(1) {
  [0]=>
  int(1)
}
array(1) {
  [1]=>
  int(0)
}
