--TEST--
zend multibyte (16)
--SKIPIF--
skip zend.multibyte
--INI--
zend.multibyte=1
--FILE--
<?php
declare(encoding="ISO-8859-15") {
	echo "ok\n";
}
echo "ok\n";
?>
--EXPECT--
ok
ok
