--TEST--
Bug #77494 (Disabling class causes segfault on member access)
--SKIPIF--
skip no ini disable_classes
<?php if (!extension_loaded("curl")) exit("skip curl extension not loaded"); ?>
--INI--
disable_classes=CURLFile
--FILE--
<?php
$a = new CURLFile();
var_dump($a->name);
?>
--EXPECTF--
Warning: CURLFile() has been disabled for security reasons in %sbug77494.php on line 2

Notice: Undefined property: CURLFile::$name in %sbug77494.php on line 3
NULL
