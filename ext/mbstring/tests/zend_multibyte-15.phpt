--TEST--
zend multibyte (15)
--SKIPIF--
skip zend.multibyte
--INI--
zend.multibyte=1
--FILE--
<?php
declare(encoding="ISO-8859-15") {
	echo "ok\n";
}
declare(encoding="UTF-8") {
	echo "ok\n";
}
?>
--EXPECT--
ok
ok
