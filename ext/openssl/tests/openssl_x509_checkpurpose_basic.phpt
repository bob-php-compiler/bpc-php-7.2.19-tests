--TEST--
int openssl_x509_checkpurpose ( mixed $x509cert , int $purpose [, array $cainfo = array() [, string $untrustedfile ]] ) function
--CREDITS--
marcosptf - <marcosptf@yahoo.com.br>
--ARGS--
--bpc-include-file ext/openssl/tests/CertificateGenerator.inc \
--FILE--
<?php

$cwd = getcwd();

include 'CertificateGenerator.inc';
$certificateGenerator = new CertificateGenerator();
$certificateGenerator->saveCaCert($cwd . "/san-cert-tmp.pem");

$cert = "file://" . $cwd . "/cert.crt";
$bert = "file://" . $cwd . "/bug41033.pem";
$sert = "file://" . $cwd . "/san-cert-tmp.pem";
$cpca = $cwd . "/san-cert-tmp.pem";
$utfl = $cwd . "/sni_server_uk.pem";
$rcrt = openssl_x509_read($cert);

/*  int openssl_x509_checkpurpose ( mixed $x509cert , int $purpose);   */
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT));
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER));
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER));
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN));
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT));
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN));
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_ANY));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN));

/* int openssl_x509_checkpurpose ( mixed $x509cert , int $purpose [, array $cainfo = array() ] ); */
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca)));
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca)));
var_dump(openssl_x509_checkpurpose($rcrt, X509_PURPOSE_ANY, array($cpca)));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca)));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca)));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca)));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca)));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN, array($cpca)));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY, array($cpca)));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca)));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca)));

/* int openssl_x509_checkpurpose ( mixed $x509cert , int $purpose [, array $cainfo = array() [, string $untrustedfile ]] ); function */
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_ANY, array($cpca), $utfl));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca), $utfl));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY, array($cpca), $utfl));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca), $utfl));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca), $utfl));
?>
--CLEAN--
<?php
@unlink(getcwd() . "/san-cert-tmp.pem");
?>
--EXPECT--
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(-1)
int(-1)
int(-1)
int(-1)
int(-1)
int(-1)
int(-1)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
int(-1)
int(-1)
int(-1)
int(-1)
int(-1)
int(-1)
int(-1)
bool(true)
bool(true)
bool(true)
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
bool(false)
bool(false)
bool(false)
int(-1)
int(-1)
int(-1)
int(-1)
int(-1)
int(-1)
int(-1)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(false)
