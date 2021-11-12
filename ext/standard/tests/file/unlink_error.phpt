--TEST--
Testing unlink() function : error conditions
--SKIPIF--
<?php
if (substr(PHP_OS, 0, 3) == 'WIN') {
    die('skip.. only on Linux');
}
?>
--FILE--
<?php
/* Prototype : bool unlink ( string $filename [, resource $context] );
   Description : Deletes filename
*/

$file_path = '.';

$filename = "$file_path/unlink_error.tmp";  // temp file name used here
$fp = fopen($filename, "w");  // create file
fclose($fp);

echo "*** Testing unlink() : error conditions ***\n";

var_dump( file_exists($filename) ); // expected true

echo "\n-- Testing unlink() on invalid arguments --\n";
// invalid arguments
var_dump( unlink('') );  // $filename as empty string
var_dump( file_exists('') );  // confirm file doesnt exist

var_dump( unlink(NULL) );  // $filename as NULL
var_dump( file_exists(NULL) );  // confirm file doesnt exist

var_dump( unlink(false) );  // $filename as boolean false
var_dump( file_exists(false) );  // confirm file doesnt exist

var_dump( unlink($filename, '') );  // $context as empty string
var_dump( unlink($filename, false) );  // $context as boolean false
var_dump( unlink($filename, NULL) );  // $context as NULL


echo "\n-- Testing unlink() on non-existent file --\n";
var_dump( unlink("./non_existent_file.tmp") );

echo "\n-- Testing unlink() on directory --\n";
// temp directory used here
$dirname = "$file_path/unlink-error";
// create temp dir
mkdir($dirname);
// unlinking directory
var_dump( unlink($dirname) );  // expected: false as unlink() does not work on dir

echo "Done\n";
?>
--CLEAN--
<?php
unlink("unlink_error.tmp");
rmdir("unlink-error");
?>
--EXPECTF--
*** Testing unlink() : error conditions ***
bool(true)

-- Testing unlink() on invalid arguments --

Warning: unlink(): %s in %s on line %d
bool(false)
bool(false)

Warning: unlink(): %s in %s on line %d
bool(false)
bool(false)

Warning: unlink(): %s in %s on line %d
bool(false)
bool(false)

Warning: unlink() expects parameter 2 to be resource, string given in %s on line %d
bool(false)

Warning: unlink() expects parameter 2 to be resource, boolean given in %s on line %d
bool(false)

Warning: unlink() expects parameter 2 to be resource, null given in %s on line %d
bool(false)

-- Testing unlink() on non-existent file --

Warning: unlink(%s/non_existent_file.tmp): No such file or directory in %s on line %d
bool(false)

-- Testing unlink() on directory --

Warning: unlink(%s/unlink-error): %s in %s on line %d
bool(false)
Done
