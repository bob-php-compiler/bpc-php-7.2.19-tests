--TEST--
Bug #73711: Segfault in openssl_pkey_new when generating DSA or DH key
--FILE--
<?php
$config = 'openssl.cnf';
var_dump(openssl_pkey_new(array(
    "private_key_type" => OPENSSL_KEYTYPE_DSA,
    "private_key_bits" => 1024,
    'config' => $config,
)));
var_dump(openssl_pkey_new(array(
    "private_key_type" => OPENSSL_KEYTYPE_DH,
    "private_key_bits" => 512,
    'config' => $config,
)));
echo "DONE";
?>
--EXPECTF--
resource(%d) of type (OpenSSL key)
resource(%d) of type (OpenSSL key)
DONE
