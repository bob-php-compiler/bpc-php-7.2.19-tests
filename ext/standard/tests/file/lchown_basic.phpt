--TEST--
Test lchown() function : basic functionality
--SKIPIF--
<?php
if (substr(PHP_OS, 0, 3) == 'WIN') die('skip no windows support');
if (!function_exists("posix_getuid")) die("skip no posix_getuid()");
?>
--FILE--
<?php
/* Prototype  : bool lchown (string filename, mixed user)
 * Description: Change file owner of a symlink
 * Source code: ext/standard/filestat.c
 * Alias to functions:
 */

echo "*** Testing lchown() : basic functionality ***\n";
$filename = 'lchown_basic.txt';
$symlink = 'lchown_basic_symlink.txt';

$uid = posix_getuid();

var_dump( touch( $filename ) );
var_dump( symlink( $filename, $symlink ) );
var_dump( lchown( $filename, $uid ) );
var_dump( fileowner( $symlink ) === $uid );

?>
===DONE===
--CLEAN--
<?php

$filename = 'lchown_basic.txt';
$symlink = 'lchown_basic_symlink.txt';
unlink($filename);
unlink($symlink);

?>
--EXPECTF--
*** Testing lchown() : basic functionality ***
bool(true)
bool(true)
bool(true)
bool(true)
===DONE===
