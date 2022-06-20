--TEST--
openssl_x509_check_private_key() tests
--FILE--
<?php
$fp = fopen("cert.crt","r");
$a = fread($fp, 8192);
fclose($fp);

$fp = fopen("private_rsa_1024.key","r");
$b = fread($fp, 8192);
fclose($fp);

$cert = "file://cert.crt";
$key = "file://private_rsa_1024.key";

var_dump(openssl_x509_check_private_key($cert, $key));
var_dump(openssl_x509_check_private_key("", $key));
var_dump(openssl_x509_check_private_key($cert, ""));
var_dump(openssl_x509_check_private_key("", ""));
var_dump(openssl_x509_check_private_key(openssl_x509_read($a), $b));
?>
--EXPECT--
bool(true)
bool(false)
bool(false)
bool(false)
bool(true)
