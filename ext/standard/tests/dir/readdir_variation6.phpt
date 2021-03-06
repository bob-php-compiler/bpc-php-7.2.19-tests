--TEST--
Test readdir() function : usage variations - operate on previously opened directory
--ARGS--
--bpc-include-file ext/standard/tests/dir/file.inc \
--FILE--
<?php
/* Prototype  : string readdir([resource $dir_handle])
 * Description: Read directory entry from dir_handle
 * Source code: ext/standard/dir.c
 */

/*
 * Open two directory handles on the same directory and pass both
 * to readdir() to test behaviour
 */

echo "*** Testing readdir() : usage variations ***\n";

// include the file.inc for Function: function create_files()
include("file.inc");

// create the temporary directory
$dir_path = "./readdir-variation6";
mkdir($dir_path);

// create files within the temporary directory
create_files($dir_path, 3, "alphanumeric", 0755, 1, "w", "readdir_variation6");

// open the directory
$dir_handle1 = opendir($dir_path);

// open the same directory again without closing it
opendir($dir_path);

echo "\n-- Reading Directory Contents with Previous Handle --\n";
$a = array();
while (FALSE !== ($file = readdir($dir_handle1))) {
	$a[] = $file;
}
sort($a);
foreach ($a as $file) {
	var_dump($file);
}

echo "\n-- Reading Directory Contents with Current Handle (no arguments supplied) --\n";
$a = array();
while (FALSE !== ($file = readdir())) {
	$a[] = $file;
}
sort($a);
foreach ($a as $file) {
	var_dump($file);
}

// delete temporary files
delete_files($dir_path, 3, "readdir_variation6");
closedir($dir_handle1);
closedir();
?>
===DONE===
--CLEAN--
<?php
$dir_path = "./readdir-variation6";
rmdir($dir_path);
?>
--EXPECTF--
*** Testing readdir() : usage variations ***

-- Reading Directory Contents with Previous Handle --
string(1) "."
string(2) ".."
string(23) "readdir_variation61.tmp"
string(23) "readdir_variation62.tmp"
string(23) "readdir_variation63.tmp"

-- Reading Directory Contents with Current Handle (no arguments supplied) --
string(1) "."
string(2) ".."
string(23) "readdir_variation61.tmp"
string(23) "readdir_variation62.tmp"
string(23) "readdir_variation63.tmp"
===DONE===
