--TEST--
crypt() function
--SKIPIF--
<?php
if (!function_exists('crypt')) {
	die("SKIP crypt() is not available");
}
?>
--FILE--
<?php

$str = 'rasmuslerdorf';
$salt1 = 'rl';
$res_1 = 'rl.3StKT.4T8M';
$salt2 = '_J9..rasm';
$res_2 = '_J9..rasmBYk8r9AiWNc';
$salt3 = '$1$rasmusle$';
$res_3 = '$1$rasmusle$rISCgZzpwk3UhDidwXvin0';
$salt4 = '$2a$07$rasmuslerd............';
$res_4 = '$2a$07$rasmuslerd............nIdrcHdxcUxWomQX9j6kvERCFjTg7Ra';

echo defined('CRYPT_STD_DES')  ? ((crypt($str, $salt1) === $res_1) ? 'STD' : 'STD - ERROR') : 'STD', "\n";
echo defined('CRYPT_EXT_DES')  ? ((crypt($str, $salt2) === $res_2) ? 'EXT' : 'EXT - ERROR') : 'EXT', "\n";
echo defined('CRYPT_MD5')      ? ((crypt($str, $salt3) === $res_3) ? 'MD5' : 'MD5 - ERROR') : 'MD5', "\n";
echo defined('CRYPT_BLOWFISH') ? ((crypt($str, $salt4) === $res_4) ? 'BLO' : 'BLO - ERROR') : 'BLO', "\n";

var_dump(crypt($str));

?>
--EXPECTF--
STD
EXT
MD5
BLO

Notice: crypt(): No salt parameter was specified. You must use a randomly generated salt and a strong hash function to produce a secure hash. in %s on line %d
string(%d) "%s"
