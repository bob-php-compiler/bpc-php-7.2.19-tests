--TEST--
SPL: Spl File Info test getExtension with leading dot
--FILE--
<?php
$file = getcwd() . '/.test';
touch($file);
$fileInfo = new SplFileInfo($file);

var_dump($fileInfo->getExtension());
unlink($file);
?>
--EXPECT--
string(4) "test"
