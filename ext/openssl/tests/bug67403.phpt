--TEST--
Bug #67403: Add signatureType to openssl_x509_parse
--FILE--
<?php
$r = openssl_x509_parse(file_get_contents('bug64802.pem'));
var_dump($r['signatureTypeSN']);
var_dump($r['signatureTypeLN']);
var_dump($r['signatureTypeNID']);

$r = openssl_x509_parse(file_get_contents('bug37820cert.pem'));
var_dump($r['signatureTypeSN']);
var_dump($r['signatureTypeLN']);
var_dump($r['signatureTypeNID']);
?>
--EXPECTF--
string(8) "RSA-SHA1"
string(21) "sha1WithRSAEncryption"
int(65)
string(7) "RSA-MD5"
string(20) "md5WithRSAEncryption"
int(8)
