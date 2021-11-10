--TEST--
Bug #73058 crypt broken when salt is 'too' long
--SKIPIF--
<?php
if (!function_exists('crypt'))) {
	die("SKIP crypt() is not available");
}
?>
--FILE--
<?php
$pass = 'secret';

$salt = '$2y$07$usesomesillystringforsalt$';
var_dump(crypt($pass, $salt));

$salt = '$2y$07$usesomesillystringforsaltzzzzzzzzzzzzz$';
var_dump(crypt($pass, $salt));

$salt = '$2y$07$usesomesillystringforx';
var_dump(crypt($pass, $salt));

?>
==OK==
--EXPECTF--
Warning: crypt(): salt '$2y$07$usesomesillystringforsalt$' has the wrong format in %s on line 5
string(2) "*0"

Warning: crypt(): salt '$2y$07$usesomesillystringforsaltzzzzzzzzzzzzz$' has the wrong format in %s on line 8
string(2) "*0"

Warning: crypt(): salt '$2y$07$usesomesillystringforx' has the wrong format in %s on line 11
string(2) "*0"
==OK==
