--TEST--
Bug #70748 (Segfault in ini_lex () at Zend/zend_ini_scanner.l)
--FILE--
<?php
$ini = '[${ 	';

$ini_file = "bug70748.ini";

file_put_contents($ini_file, $ini);

var_dump(parse_ini_file($ini_file));
?>
--CLEAN--
<?php
unlink("bug70748.ini");
?>
--EXPECTF--
Warning: parse ini error on line %d in %s on line %d
array(0) {
}
