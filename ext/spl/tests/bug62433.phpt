--TEST--
Bug #62433 Inconsistent behavior of RecursiveDirectoryIterator to dot files (. and ..)
--FILE--
<?php
$dir = getcwd();
$dots = array_keys(iterator_to_array(new RecursiveDirectoryIterator($dir)));
$ndots = array_keys(iterator_to_array(new RecursiveDirectoryIterator($dir, FilesystemIterator::SKIP_DOTS)));

var_dump(in_array($dir . DIRECTORY_SEPARATOR . '.', $dots));
var_dump(in_array($dir . DIRECTORY_SEPARATOR . '..', $dots));

var_dump(in_array($dir . DIRECTORY_SEPARATOR . '.', $ndots));
var_dump(in_array($dir . DIRECTORY_SEPARATOR . '..', $ndots));
?>
--EXPECT--
bool(true)
bool(true)
bool(false)
bool(false)
