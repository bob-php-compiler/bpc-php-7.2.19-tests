--TEST--
Test rename() function: usage variations-6
--SKIPIF--
<?php
if (substr(PHP_OS, 0, 3) == 'WIN') die('skip.. not for Windows');
if (!function_exists("symlink")) die("skip symlinks are not supported");
?>
--FILE--
<?php

$file_path = getcwd() . '/rename_variation6.php';

$tmp_file = $file_path . ".tmp";
$tmp_link = $file_path . ".tmp.link";
$tmp_link2 = $file_path . ".link2";

touch($tmp_file);
symlink($tmp_file, $tmp_link);
rename($tmp_link, $tmp_link2);

clearstatcache();

var_dump(readlink($tmp_link));
var_dump(readlink($tmp_link2));
var_dump(file_exists($tmp_file));

@unlink($tmp_link);
@unlink($tmp_link2);
@unlink($tmp_file);

echo "Done\n";
?>
--EXPECTF--
Warning: readlink(): No such file or directory in %s on line %d
bool(false)
string(%d) "%srename_variation6.php.tmp"
bool(true)
Done
