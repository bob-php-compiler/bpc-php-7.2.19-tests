--TEST--
php_strip_whitespace() and output buffer
--SKIPIF--
skip no highlight_file() highlight_string() php_strip_whitespace()
<?php if( substr(PHP_OS, 0, 3) == "WIN") die('skip Non windows test');?>
--INI--
log_errors_max_len=4096
--FILE--
<?php
$file = str_repeat("A", PHP_MAXPATHLEN - strlen(__DIR__ . DIRECTORY_SEPARATOR . __FILE__));

var_dump(php_strip_whitespace($file));
var_dump(ob_get_contents());

?>
===DONE===
--EXPECTF--
Warning: php_strip_whitespace(%s): failed to open stream: File name too long in %s007.php on line %d
string(0) ""
bool(false)
===DONE===
