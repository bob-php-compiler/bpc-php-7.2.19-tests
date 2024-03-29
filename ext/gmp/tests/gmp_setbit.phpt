--TEST--
gmp_setbit() basic tests
--SKIPIF--
<?php if (!extension_loaded("gmp")) print "skip"; ?>
--FILE--
<?php

$n = gmp_init(-1);
gmp_setbit($n, 10, -1);
var_dump(gmp_strval($n));

$n = gmp_init(5);
var_dump(gmp_setbit($n, -20, 0));
var_dump(gmp_strval($n));

$n = gmp_init(5);
gmp_setbit($n, 2, 0);
var_dump(gmp_strval($n));

$n = gmp_init(5);
gmp_setbit($n, 1, 1);
var_dump(gmp_strval($n));

$n = gmp_init("100000000000");
gmp_setbit($n, 23, 1);
var_dump(gmp_strval($n));

gmp_setbit($n, 23, 0);
var_dump(gmp_strval($n));

gmp_setbit($n, 3);
var_dump(gmp_strval($n));

$b = "";
gmp_setbit($b, 23);
gmp_setbit($b,array());
$a = array();
gmp_setbit($a,array());

echo "Done\n";
?>
--EXPECTF--
string(2) "-1"

Warning: gmp_setbit(): Index must be greater than or equal to zero in %s on line %d
bool(false)
string(1) "5"
string(1) "1"
string(1) "7"
string(12) "100008388608"
string(12) "100000000000"
string(12) "100000000008"

Warning: gmp_setbit() expects parameter 1 to be GMP, string given in %s on line %d

Warning: gmp_setbit() expects parameter 1 to be GMP, string given in %s on line %d

Warning: gmp_setbit() expects parameter 1 to be GMP, array given in %s on line %d
Done
