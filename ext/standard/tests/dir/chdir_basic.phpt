--TEST--
Test chdir() function : basic functionality
--FILE--
<?php
/* Prototype  : bool chdir(string $directory)
 * Description: Change the current directory
 * Source code: ext/standard/dir.c
 */

/*
 * Test basic functionality of chdir() with absolute and relative paths
 */

echo "*** Testing chdir() : basic functionality ***\n";
$base_dir_path = '.';

$level1_one_dir_name = "level1_one";
$level1_one_dir_path = "$base_dir_path/$level1_one_dir_name";

$level1_two_dir_name = "level1_two";
$level1_two_dir_path = "$base_dir_path/$level1_one_dir_name/$level1_two_dir_name";

// create directories
mkdir($level1_one_dir_path);
mkdir($level1_two_dir_path);

echo "\n-- Testing chdir() with absolute path: --\n";
chdir($base_dir_path);
var_dump(chdir($level1_one_dir_path));
var_dump(getcwd());

echo "\n-- Testing chdir() with relative paths: --\n";
var_dump(chdir($level1_two_dir_name));
var_dump(getcwd());
?>
===DONE===
--CLEAN--
<?php
$file_path = '.';
rmdir("$file_path/level1_one/level1_two");
rmdir("$file_path/level1_one");
?>
--EXPECTF--
*** Testing chdir() : basic functionality ***

-- Testing chdir() with absolute path: --
bool(true)
string(%d) "%slevel1_one"

-- Testing chdir() with relative paths: --
bool(true)
string(%d) "%slevel1_one%elevel1_two"
===DONE===
