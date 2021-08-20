--TEST--
Bug #66660 (Composer.phar install/update fails)
--SKIPIF--
skip no highlight_file() highlight_string() php_strip_whitespace()
--STDIN--
<?php __CLASS__ ?>
--FILE--
<?php
file_put_contents(__DIR__."/bug66660.tmp.php", "<?php __CLASS__ ?>");
echo php_strip_whitespace(__DIR__."/bug66660.tmp.php");
?>
--CLEAN--
<?php unlink(__DIR__."/bug66660.tmp.php"); ?>
--EXPECT--
<?php __CLASS__ ?>
