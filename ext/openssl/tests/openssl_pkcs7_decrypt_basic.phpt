--TEST--
openssl_pkcs7_decrypt() tests
--FILE--
<?php
$infile = "cert.crt";
$privkey = "file://private_rsa_1024.key";
$encrypted = tempnam(sys_get_temp_dir(), "ssl");
if ($encrypted === false)
    die("failed to get a temporary filename!");
$outfile = tempnam(sys_get_temp_dir(), "ssl");
if ($outfile === false) {
    unlink($outfile);
    die("failed to get a temporary filename!");
}

$single_cert = "file://cert.crt";
$headers = array("test@test", "testing openssl_pkcs7_encrypt()");
$wrong = "wrong";
$empty = "";
$cipher = OPENSSL_CIPHER_AES_128_CBC;

openssl_pkcs7_encrypt($infile, $encrypted, $single_cert, $headers, 0, $cipher);
var_dump(openssl_pkcs7_decrypt($encrypted, $outfile, $single_cert, $privkey));
var_dump(openssl_pkcs7_decrypt($encrypted, $outfile, openssl_x509_read($single_cert), $privkey));
var_dump(openssl_pkcs7_decrypt($encrypted, $outfile, $single_cert, $wrong));
var_dump(openssl_pkcs7_decrypt($encrypted, $outfile, $wrong, $privkey));
var_dump(openssl_pkcs7_decrypt($encrypted, $outfile, null, $privkey));
var_dump(openssl_pkcs7_decrypt($wrong, $outfile, $single_cert, $privkey));
var_dump(openssl_pkcs7_decrypt($empty, $outfile, $single_cert, $privkey));
var_dump(openssl_pkcs7_decrypt($encrypted, $empty, $single_cert, $privkey));
var_dump(openssl_pkcs7_decrypt($encrypted, $outfile, $empty, $privkey));
var_dump(openssl_pkcs7_decrypt($encrypted, $outfile, $single_cert, $empty));

if (file_exists($encrypted)) {
    echo "true\n";
    unlink($encrypted);
}
if (file_exists($outfile)) {
    echo "true\n";
    unlink($outfile);
}
?>
--EXPECTF--
bool(true)
bool(true)

Warning: openssl_pkcs7_decrypt(): Unable to get private key in %s on line %d
bool(false)

Warning: openssl_pkcs7_decrypt(): X.509 Certificate cannot be retrieved in %s on line %d
bool(false)

Warning: openssl_pkcs7_decrypt(): X.509 Certificate cannot be retrieved in %s on line %d
bool(false)
bool(false)
bool(false)
bool(false)

Warning: openssl_pkcs7_decrypt(): X.509 Certificate cannot be retrieved in %s on line %d
bool(false)

Warning: openssl_pkcs7_decrypt(): Unable to get private key in %s on line %d
bool(false)
true
true
