--TEST--
assigning tests
--FILE--
<?php

echo "==postcrement==\n";

$a = array();
var_dump($a[new stdclass]->p->q[0]++);
var_dump($a);

$a = array();
var_dump($a[new stdclass]->p->q[0]--);
var_dump($a);

echo "==precrement==\n";

$a = array();
var_dump(++$a[new stdclass]->p->q[0]);
var_dump($a);

$a = array();
var_dump(--$a[new stdclass]->p->q[0]);
var_dump($a);

echo "==assigning-string-cat==\n";

$a = array();
var_dump($a[new stdclass]->p->q[0] .= 'A');
var_dump($a);

echo "==assigning-arithmetic-op==\n";

$a = array();
var_dump($a[new stdclass]->p->q[0] += 2);
var_dump($a);

$a = array();
var_dump($a[new stdclass]->p->q[0] -= 2);
var_dump($a);

$a = array();
var_dump($a[new stdclass]->p->q[0] *= 2);
var_dump($a);

$a = array();
var_dump($a[new stdclass]->p->q[0] /= 2);
var_dump($a);

$a = array();
var_dump($a[new stdclass]->p->q[0] %= 2);
var_dump($a);

$a = array();
var_dump($a[new stdclass]->p->q[0] **= 2);
var_dump($a);

$a = array();
var_dump($a[new stdclass]->p->q[0] <<= 2);
var_dump($a);

$a = array();
var_dump($a[new stdclass]->p->q[0] |= 2);
var_dump($a);

$a = array();
var_dump($a[new stdclass]->p->q[0] ^= 2);
var_dump($a);

$a = array();
var_dump($a[new stdclass]->p->q[0] &= 2);
var_dump($a);

?>
--EXPECTF--
==postcrement==

Warning: Illegal offset type in %s on line 6
NULL
array(0) {
}

Warning: Illegal offset type in %s on line 10
NULL
array(0) {
}
==precrement==

Warning: Illegal offset type in %s on line 16
NULL
array(0) {
}

Warning: Illegal offset type in %s on line 20
NULL
array(0) {
}
==assigning-string-cat==

Warning: Illegal offset type in %s on line 26
NULL
array(0) {
}
==assigning-arithmetic-op==

Warning: Illegal offset type in %s on line 32
NULL
array(0) {
}

Warning: Illegal offset type in %s on line 36
NULL
array(0) {
}

Warning: Illegal offset type in %s on line 40
NULL
array(0) {
}

Warning: Illegal offset type in %s on line 44
NULL
array(0) {
}

Warning: Illegal offset type in %s on line 48
NULL
array(0) {
}

Warning: Illegal offset type in %s on line 52
NULL
array(0) {
}

Warning: Illegal offset type in %s on line 56
NULL
array(0) {
}

Warning: Illegal offset type in %s on line 60
NULL
array(0) {
}

Warning: Illegal offset type in %s on line 64
NULL
array(0) {
}

Warning: Illegal offset type in %s on line 68
NULL
array(0) {
}
