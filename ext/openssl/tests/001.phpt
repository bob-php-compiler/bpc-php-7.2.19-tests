--TEST--
OpenSSL private key functions
--SKIPIF--
<?php
if (!@openssl_pkey_new()) die("skip cannot create private key");
?>
--FILE--
<?php
echo "Creating private key\n";

$conf = array('config' => 'openssl.cnf');
$privkey = openssl_pkey_new($conf);

if ($privkey === false) {
    die("failed to create private key");
}

$passphrase = "banana";
$key_file_name = '001-tmp.key';
if ($key_file_name === false) {
    die("failed to get a temporary filename!");
}

echo "Export key to file\n";

if (!openssl_pkey_export_to_file($privkey, $key_file_name, $passphrase, $conf)) {
    die("failed to export to file $key_file_name");
}
var_dump(is_resource($privkey));

echo "Load key from file - array syntax\n";

$loaded_key = openssl_pkey_get_private(array("file://$key_file_name", $passphrase));

if ($loaded_key === false) {
    die("failed to load key using array syntax");
}

openssl_pkey_free($loaded_key);

echo "Load key using direct syntax\n";

$loaded_key = openssl_pkey_get_private("file://$key_file_name", $passphrase);

if ($loaded_key === false) {
    die("failed to load key using direct syntax");
}

openssl_pkey_free($loaded_key);

echo "Load key manually and use string syntax\n";

$key_content = file_get_contents($key_file_name);
$loaded_key = openssl_pkey_get_private($key_content, $passphrase);

if ($loaded_key === false) {
    die("failed to load key using string syntax");
}
openssl_pkey_free($loaded_key);

echo "OK!\n";

?>
--EXPECT--
Creating private key
Export key to file
bool(true)
Load key from file - array syntax
Load key using direct syntax
Load key manually and use string syntax
OK!
--CLEAN--
<?php
$key_file_name = '001-tmp.key';
@unlink($key_file_name);
?>
