--TEST--
Test lchown() function : error functionality
--SKIPIF--
<?php
if (substr(PHP_OS, 0, 3) == 'WIN') die('skip no windows support');
if (!function_exists("posix_getuid")) die("skip no posix_getuid()");
// Skip if being run by root
$filename = "is_readable_root_check.tmp";
$fp = fopen($filename, 'w');
fclose($fp);
if(fileowner($filename) == 0) {
        unlink ($filename);
        die('skip cannot be run as root');
}
unlink($filename);
?>
--FILE--
<?php
/* Prototype  : bool lchown (string filename, mixed user)
 * Description: Change file owner of a symlink
 * Source code: ext/standard/filestat.c
 * Alias to functions:
 */

echo "*** Testing lchown() : error functionality ***\n";

// Set up
$filename = 'lchown.txt';
touch( $filename );
$uid = posix_getuid();


// Non-existent filename
var_dump( lchown( 'foobar_lchown.txt', $uid ) );

// Wrong argument types
var_dump( lchown( new StdClass(), $uid ) );
var_dump( lchown( array(), $uid ) );

// Bad user
var_dump( lchown( $filename, -5 ) );

?>
===DONE===
--CLEAN--
<?php

$filename = 'lchown.txt';
unlink($filename);

?>
--EXPECTF--
*** Testing lchown() : error functionality ***

Warning: lchown(): No such file or directory in %s on line %d
bool(false)

Warning: lchown() expects parameter 1 to be a valid path, object given in %s on line %d
NULL

Warning: lchown() expects parameter 1 to be a valid path, array given in %s on line %d
NULL

Warning: lchown(): %r(Operation not permitted|Invalid argument)%r in %s on line %d
bool(false)
===DONE===
