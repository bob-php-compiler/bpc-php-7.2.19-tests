--TEST--
Bug #74022 PHP Fast CGI crashes when reading from a pfx file with valid password, multiple extra certs
--EXTENSIONS--
openssl
--FILE--
<?php
function test($p12_contents, $password) {
    openssl_pkcs12_read($p12_contents, $cert_data, $password);
    openssl_error_string();
    var_dump(count($cert_data['extracerts']));
}

$cert = file_get_contents("public.crt");
$priv = file_get_contents("private.crt");
$extracert = file_get_contents("cert.crt");
$pass = "qwerty";
openssl_pkcs12_export($cert, $p12, $priv, $pass, array('extracerts' => array($extracert, $extracert)));

test($p12, $pass);
?>
--EXPECT--
int(2)
