--TEST--
openssl_seal() tests
--FILE--
<?php
// simple tests
$a = 1;
$b = array(1);
$c = array(1);
$d = array(1);
$method = "AES-128-ECB";

var_dump(openssl_seal($a, $b, $c, $d, $method));
var_dump(openssl_seal($a, $a, $a, array(), $method));
var_dump(openssl_seal($c, $c, $c, 1, $method));
var_dump(openssl_seal($b, $b, $b, "", $method));

// tests with cert
$data = "openssl_open() test";
$pub_key = "file://public.key";
$wrong = "wrong";

var_dump(openssl_seal($data, $sealed, $ekeys, array($pub_key), $method));                  // no output
var_dump(openssl_seal($data, $sealed, $ekeys, array($pub_key, $pub_key), $method));        // no output
var_dump(openssl_seal($data, $sealed, $ekeys, array($pub_key, $wrong), $method));
var_dump(openssl_seal($data, $sealed, $ekeys, $pub_key, $method));
var_dump(openssl_seal($data, $sealed, $ekeys, array(), $method));
var_dump(openssl_seal($data, $sealed, $ekeys, array($wrong), $method));

echo "Done\n";
?>
--EXPECTF--
Warning: openssl_seal(): not a public key (1th member of pubkeys) in %s on line %d
bool(false)

Warning: openssl_seal(): Fourth argument to openssl_seal() must be a non-empty array in %s on line %d
bool(false)

Warning: openssl_seal() expects parameter 1 to be string, array given in %s on line %d
NULL

Warning: openssl_seal() expects parameter 1 to be string, array given in %s on line %d
NULL
int(32)
int(32)

Warning: openssl_seal(): not a public key (2th member of pubkeys) in %s on line %d
bool(false)

Warning: openssl_seal() expects parameter 4 to be array, string given in %s on line %d
NULL

Warning: openssl_seal(): Fourth argument to openssl_seal() must be a non-empty array in %s on line %d
bool(false)

Warning: openssl_seal(): not a public key (1th member of pubkeys) in %s on line %d
bool(false)
Done
