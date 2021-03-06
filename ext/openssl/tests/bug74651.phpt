--TEST--
Bug #74651: negative-size-param (-1) in memcpy in zif_openssl_seal()
--FILE--
<?php

$inputstr = file_get_contents("74651.pem");
$pub_key_id = openssl_get_publickey($inputstr);
var_dump($pub_key_id);
var_dump(openssl_seal($inputstr, $sealed, $ekeys, array($pub_key_id, $pub_key_id), 'AES-128-ECB'));
?>
--EXPECTF--
resource(%d) of type (OpenSSL key)
bool(false)
