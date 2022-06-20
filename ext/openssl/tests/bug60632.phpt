--TEST--
Bug #60632: openssl_seal fails with AES
--FILE--
<?php

$pkey = openssl_pkey_new(array(
	'digest_alg' => 'sha256',
	'private_key_bits' => 1024,
	'private_key_type' => OPENSSL_KEYTYPE_RSA,
	'encrypt_key' => false,
	'config' => 'openssl.cnf',
));
$details = openssl_pkey_get_details($pkey);
$test_pubkey = $details['key'];
$pubkey = openssl_pkey_get_public($test_pubkey);
$encrypted = null;
$ekeys = array();
$result = openssl_seal('test phrase', $encrypted, $ekeys, array($pubkey), 'AES-256-CBC');
echo "Done";
?>
--EXPECTF--
Warning: openssl_seal(): Cipher algorithm requires an IV to be supplied as a sixth parameter in %s on line %d
Done
