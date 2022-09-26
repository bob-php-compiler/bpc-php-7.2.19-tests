--TEST--
Bug #70350 (ZipArchive::extractTo allows for directory traversal when creating directories)
--FILE--
<?php

$dir = "bug70350.dir";
mkdir($dir);
$archive = new ZipArchive();
$archive->open("$dir/a.zip",ZipArchive::CREATE);
$archive->addEmptyDir("../down2/");
$archive->close();

$archive2 = new ZipArchive();
$archive2->open("$dir/a.zip");
$archive2->extractTo($dir);
$archive2->close();
var_dump(file_exists("$dir/down2/"));
var_dump(file_exists("../down2/"));
?>
--CLEAN--
<?php
$dir = "bug70350";
rmdir("$dir/down2");
unlink("$dir/a.zip");
rmdir($dir);
?>
--EXPECT--
bool(true)
bool(false)
