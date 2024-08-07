--TEST--
openssl_decrypt() tests dependent on openssl_encrypt
--FILE--
<?php
$data = "openssl_encrypt() and openssl_decrypt() tests";
$method = "AES-128-CBC";
$password = "openssl";

$ivlen = openssl_cipher_iv_length($method);
$iv    = '';
srand(time() + ((int)(microtime(true) * 1000000) % 1000000));
while(strlen($iv) < $ivlen) $iv .= chr(rand(0,255));

$encrypted = openssl_encrypt($data, $method, $password, 0, $iv);
$output = openssl_decrypt($encrypted, $method, $password, 0, $iv);
var_dump($output);
$encrypted = openssl_encrypt($data, $method, $password, OPENSSL_RAW_DATA, $iv);
$output = openssl_decrypt($encrypted, $method, $password, OPENSSL_RAW_DATA, $iv);
var_dump($output);
// if we want to manage our own padding
$padded_data = $data . str_repeat(' ', 16 - (strlen($data) % 16));
$encrypted = openssl_encrypt($padded_data, $method, $password, OPENSSL_RAW_DATA|OPENSSL_ZERO_PADDING, $iv);
$output = openssl_decrypt($encrypted, $method, $password, OPENSSL_RAW_DATA|OPENSSL_ZERO_PADDING, $iv);
var_dump(rtrim($output));

$output2 = openssl_decrypt($encrypted, $method, $password, OPENSSL_RAW_DATA|OPENSSL_ZERO_PADDING, $iv, '');
var_dump($output2 === $output);
$output3 = openssl_decrypt($encrypted, $method, $password, OPENSSL_RAW_DATA|OPENSSL_ZERO_PADDING, $iv, null);
var_dump($output3 === $output);

if (in_array("bf-ecb", openssl_get_cipher_methods())) {
    // if we want to prefer variable length cipher setting
    $encrypted = openssl_encrypt($data, "bf-ecb", $password, OPENSSL_DONT_ZERO_PAD_KEY);
    $output = openssl_decrypt($encrypted, "bf-ecb", $password, OPENSSL_DONT_ZERO_PAD_KEY);
    var_dump($output === $data);
} else {
    var_dump(true);
}

// It's okay to pass $tag for a non-authenticated cipher.
// It will be populated with null in that case.
openssl_encrypt($data, $method, $password, 0, $iv, $tag);
var_dump($tag);

?>
--EXPECT--
string(45) "openssl_encrypt() and openssl_decrypt() tests"
string(45) "openssl_encrypt() and openssl_decrypt() tests"
string(45) "openssl_encrypt() and openssl_decrypt() tests"
bool(true)
bool(true)
bool(true)
NULL
