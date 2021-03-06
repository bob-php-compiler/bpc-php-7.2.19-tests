--TEST--
Test readdir() function : usage variations - sub-directories
--ARGS--
--bpc-include-file ext/standard/tests/dir/file.inc \
--FILE--
<?php
/* Prototype  : string readdir([resource $dir_handle])
 * Description: Read directory entry from dir_handle
 * Source code: ext/standard/dir.c
 */

/*
 * Pass a directory handle pointing to a directory that has a sub-directory
 * to test behaviour of readdir()
 */

echo "*** Testing readdir() : usage variations ***\n";

// include the file.inc for Function: function create_files()
chdir('.');
include("file.inc");

$path_top = './readdir-variation3';
$path_sub = $path_top . '/sub_folder';
mkdir($path_top);
mkdir($path_sub);

create_files($path_top, 2);
create_files($path_sub, 2);

$dir_handle = opendir($path_top);
while(FALSE !== ($file = readdir($dir_handle))) {

	// different OS order files differently so will
	// store file names into an array so can use sorted in expected output
	$contents[] = $file;
}

// more important to check that all contents are present than order they are returned in
sort($contents);
var_dump($contents);

delete_files($path_top, 2);
delete_files($path_sub, 2);

closedir($dir_handle);
?>
===DONE===
--CLEAN--
<?php
$path_top = './readdir-variation3';
$path_sub = $path_top . '/sub_folder';
rmdir($path_sub);
rmdir($path_top);
?>
--EXPECTF--
*** Testing readdir() : usage variations ***
array(5) {
  [0]=>
  string(1) "."
  [1]=>
  string(2) ".."
  [2]=>
  string(9) "file1.tmp"
  [3]=>
  string(9) "file2.tmp"
  [4]=>
  string(10) "sub_folder"
}
===DONE===
