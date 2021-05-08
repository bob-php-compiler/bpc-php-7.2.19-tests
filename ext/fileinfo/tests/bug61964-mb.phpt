--TEST--
Bug #61964 (finfo_open with directory cause invalid free)
--SKIPIF--
<?php require_once(dirname(__FILE__) . '/skipif.inc'); ?>
--FILE--
<?php

$magic_file = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'magic私はガラスを食べられます';

$ret = @finfo_open(FILEINFO_NONE, $magic_file . ".non-exits私はガラスを食べられます");
var_dump($ret);

$dir = "test-folder";
@mkdir($dir);

$magic_file_copy = $dir . "/magic私はガラスを食べられます.copy";
$magic_file_copy2 = $magic_file_copy . "2";
copy($magic_file, $magic_file_copy);
copy($magic_file, $magic_file_copy2);

$ret = finfo_open(FILEINFO_NONE, $dir);
var_dump($ret);

$ret = @finfo_open(FILEINFO_NONE, $dir);
var_dump($ret);

$ret = @finfo_open(FILEINFO_NONE, $dir. "/non-exits-dir私はガラスを食べられます");
var_dump($ret);

// write some test files to test folder
file_put_contents($dir . "/test1.txt", "string\n> Core\n> Me");
file_put_contents($dir . "/test2.txt", "a\nb\n");
@mkdir($dir . "/test-inner-folder私はガラスを食べられます");

finfo_open(FILEINFO_NONE, $dir);
echo "DONE: testing dir with files\n";

rmdir($dir . "/test-inner-folder私はガラスを食べられます");
unlink($dir . "/test1.txt");
unlink($dir . "/test2.txt");

unlink($magic_file_copy);
unlink($magic_file_copy2);
rmdir($dir);
?>
===DONE===
--EXPECTF--
%s: Warning: offset `string' invalid
%s: Warning: offset ` Core' invalid
%s: Warning: offset ` Me' invalid
%s: Warning: offset `a' invalid
%s: Warning: offset `b' invalid
bool(false)
resource(%d) of type (file_info)
resource(%d) of type (file_info)
bool(false)

Warning: finfo_open(): Failed to load magic database at 'test-folder'. in %sbug61964-mb.php on line %d
DONE: testing dir with files
===DONE===
