--TEST--
Testing unlink() function : basic functionality
--FILE--
<?php
/* Prototype : bool unlink ( string $filename [, resource $context] );
   Description : Deletes filename
*/

$file_path = '.';

echo "*** Testing unlink() on a file ***\n";
$filename = "$file_path/unlink_basic.tmp";  // temp file name used here
$fp = fopen($filename, "w");  // create file
fwrite($fp, "Hello World");
fclose($fp);

// delete file
var_dump( unlink($filename) );
var_dump( file_exists($filename) );  // confirm file doesnt exist
/*
echo "\n*** Testing unlink() : checking second argument ***\n";
// creating a context
$context = stream_context_create();
// temp file name used here
$filename = "$file_path/unlink_basic.tmp";
$fp = fopen($filename, "w");  // create file
fclose($fp);

// delete file
var_dump( unlink($filename, $context) );  // using $context in second argument
var_dump( file_exists($filename) );  // confirm file doesnt exist
*/
echo "Done\n";
?>
--EXPECTF--
*** Testing unlink() on a file ***
bool(true)
bool(false)
Done
