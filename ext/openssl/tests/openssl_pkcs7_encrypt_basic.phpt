--TEST--
openssl_pkcs7_encrypt() tests
--FILE--
<?php
$infile = "cert.crt";
$outfile = tempnam(sys_get_temp_dir(), "ssl");
if ($outfile === false)
    die("failed to get a temporary filename!");
$outfile2 = tempnam(sys_get_temp_dir(), "ssl");
if ($outfile2 === false)
    die("failed to get a temporary filename!");
$outfile3 = tempnam(sys_get_temp_dir(), "ssl");
if ($outfile3 === false)
    die("failed to get a temporary filename!");

$single_cert = "file://cert.crt";
$privkey = "file://private_rsa_1024.key";
$multi_certs = array($single_cert, $single_cert);
$assoc_headers = array("To" => "test@test", "Subject" => "testing openssl_pkcs7_encrypt()");
$headers = array("test@test", "testing openssl_pkcs7_encrypt()");
$empty_headers = array();
$wrong = "wrong";
$empty = "";
$cipher = OPENSSL_CIPHER_AES_128_CBC;

var_dump(openssl_pkcs7_encrypt($infile, $outfile, $single_cert, $headers, 0, $cipher));
var_dump(openssl_pkcs7_encrypt($infile, $outfile, openssl_x509_read($single_cert), $headers, 0, $cipher));
var_dump(openssl_pkcs7_decrypt($outfile, $outfile2, $single_cert, $privkey));
var_dump(openssl_pkcs7_encrypt($infile, $outfile, $single_cert, $assoc_headers, 0, $cipher));
var_dump(openssl_pkcs7_encrypt($infile, $outfile, $single_cert, $empty_headers, 0, $cipher));
var_dump(openssl_pkcs7_encrypt($wrong, $outfile, $single_cert, $headers, 0, $cipher));
var_dump(openssl_pkcs7_encrypt($empty, $outfile, $single_cert, $headers, 0, $cipher));
var_dump(openssl_pkcs7_encrypt($infile, $empty, $single_cert, $headers, 0, $cipher));
var_dump(openssl_pkcs7_encrypt($infile, $outfile, $wrong, $headers, 0, $cipher));
var_dump(openssl_pkcs7_encrypt($infile, $outfile, $empty, $headers, 0, $cipher));
var_dump(openssl_pkcs7_encrypt($infile, $outfile, $multi_certs, $headers, 0, $cipher));
var_dump(openssl_pkcs7_encrypt($infile, $outfile, array_map('openssl_x509_read', $multi_certs), $headers, 0, $cipher));
var_dump(openssl_pkcs7_encrypt($infile, $outfile3, $single_cert, $headers, PKCS7_NOOLDMIMETYPE, $cipher));

if (file_exists($outfile)) {
    echo "true\n";
    unlink($outfile);
}
if (file_exists($outfile2)) {
    echo "true\n";
    unlink($outfile2);
}

if (file_exists($outfile3)) {
    $content = file_get_contents($outfile3, false, null, 0, 256);
    if (str_contains($content, 'Content-Type: application/pkcs7-mime; smime-type=enveloped-data; name="smime.p7m"')) {
        echo "true\n";
    }
    unset($content); 
    unlink($outfile3);
}
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(true)
bool(true)
bool(true)
true
true
true
