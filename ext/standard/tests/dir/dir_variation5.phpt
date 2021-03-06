--TEST--
Test dir() function : usage variations - open a file instead of directory
--SKIPIF--
<?php
if (substr(PHP_OS, 0, 3) == 'WIN') {
    die('skip.. Not valid for Windows');
}
?>
--FILE--
<?php
/*
 * Prototype  : object dir(string $directory[, resource $context])
 * Description: Directory class with properties, handle and class and methods read, rewind and close
 * Source code: ext/standard/dir.c
 */

/*
 * Passing a file as argument to dir() function instead of a directory
 * and checking if proper warning message is generated.
 */

echo "*** Testing dir() : open a file instead of a directory ***\n";

// open the file instead of directory
$d = dir('dir_variation5.php');
var_dump( $d );

echo "Done";
?>
--EXPECTF--
*** Testing dir() : open a file instead of a directory ***

Warning: dir(%s): failed to open dir: %s in %s on line %d
bool(false)
Done
