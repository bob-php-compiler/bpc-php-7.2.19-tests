--TEST--
Bug #73711: Segfault in openssl_pkey_new when generating DSA or DH key
--FILE--
<?php
$cnf = 'bug73711.cnf';
var_dump(openssl_pkey_new(array("private_key_type" => OPENSSL_KEYTYPE_DSA, 'config' => $cnf)));
var_dump(openssl_pkey_new(array("private_key_type" => OPENSSL_KEYTYPE_DH, 'config' => $cnf)));
echo "DONE";
?>
--EXPECTF--
resource(%d) of type (OpenSSL key)
resource(%d) of type (OpenSSL key)
DONE
