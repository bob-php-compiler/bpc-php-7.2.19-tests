--TEST--
Test copy() function: usage variations - src as dir and dest as an existing file(Bug #42243)
--FILE--
<?php
/* Prototype: bool copy ( string $source, string $dest );
   Description: Makes a copy of the file source to dest.
     Returns TRUE on success or FALSE on failure.
*/

/* Test copy(): Trying to copy dir to an existing file */

echo "*** Test copy() function: Trying to copy dir to file ***\n";
$file_path = '.';
$file = $file_path."/copy_variation13_dir.tmp";
fclose(fopen($file, "w"));
$dir = $file_path."/copy-variation13";
mkdir($dir);

echo "*** Testing copy() in copying dir to file ***\n";
var_dump( copy($dir, $file) );

var_dump( file_exists($file) );
var_dump( file_exists($dir) );

var_dump( is_file($dir) );
var_dump( is_dir($dir) );

var_dump( is_file($file) );
var_dump( is_dir($file) );

var_dump( filesize($file) );
var_dump( filesize($dir) );

echo "*** Done ***\n";
?>
--CLEAN--
<?php
unlink("./copy_variation13_dir.tmp");
rmdir("./copy-variation13");
?>
--EXPECTF--
*** Test copy() function: Trying to copy dir to file ***
*** Testing copy() in copying dir to file ***

Warning: copy(): The first argument to copy() function cannot be a directory in %scopy_variation13.php on line %d
bool(false)
bool(true)
bool(true)
bool(false)
bool(true)
bool(true)
bool(false)
int(%d)
int(%d)
*** Done ***
