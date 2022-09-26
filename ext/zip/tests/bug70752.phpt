--TEST--
Bug #70752 (Depacking with wrong password leaves 0 length files)
--FILE--
<?php
$filename = 'bug70752.zip';
$zip = new ZipArchive();
$zip->open($filename);

$filename = 'bug70752.txt';
var_dump(file_exists($filename));

$zip->setPassword('bar'); // correct password would be 'foo'
$zip->extractTo('.');
$zip->close();

var_dump(file_exists($filename));
?>
===DONE===
--EXPECT--
bool(false)
bool(false)
===DONE===
--CLEAN--
<?php
$filename = 'bug70752.txt';
unlink($filename);
?>
