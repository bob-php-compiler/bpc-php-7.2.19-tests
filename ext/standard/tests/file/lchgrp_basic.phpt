--TEST--
Test lchgrp() function : basic functionality
--SKIPIF--
<?php
if (substr(PHP_OS, 0, 3) == 'WIN') die('skip no windows support');
if (!function_exists("posix_getgid")) die("skip no posix_getgid()");
?>
--FILE--
<?php
$filename = 'lchgrp.txt';
$symlink = 'symlink.txt';

$gid = posix_getgid();

var_dump( touch( $filename ) );
var_dump( symlink( $filename, $symlink ) );
var_dump( lchgrp( $filename, $gid ) );
var_dump( filegroup( $symlink ) === $gid );

?>
===DONE===
--CLEAN--
<?php

$filename = 'lchgrp.txt';
$symlink = 'symlink.txt';
unlink($filename);
unlink($symlink);

?>
--EXPECTF--
bool(true)
bool(true)
bool(true)
bool(true)
===DONE===
