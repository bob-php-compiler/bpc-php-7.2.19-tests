--TEST--
Bug #68557 (SplFileInfo::getPathname() may be broken)
--FILE--
<?php
$dir = getcwd();
mkdir($dir . DIRECTORY_SEPARATOR . 'tmp');
touch($dir . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . 'a');
touch($dir . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . 'b');

$d = new DirectoryIterator($dir . DIRECTORY_SEPARATOR . 'tmp');

$d->seek(0);
$path0 = $d->current()->getPathname();

$d->seek(1);
$path1 = $d->current()->getPathname();

$d->seek(2);
$path2 = $d->current()->getPathname();

$d->seek(0);
var_dump($path0 === $d->current()->getPathname());

$d->seek(1);
var_dump($path1 === $d->current()->getPathname());

$d->seek(2);
var_dump($path2 === $d->current()->getPathname());

$d->seek(0);
var_dump($path0 === $d->current()->getPathname());
?>
--CLEAN--
<?php
$dir = getcwd();
unlink($dir . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . 'a');
unlink($dir . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . 'b');
rmdir($dir . DIRECTORY_SEPARATOR . 'tmp');
?>
--EXPECTF--
bool(true)
bool(true)
bool(true)
bool(true)
