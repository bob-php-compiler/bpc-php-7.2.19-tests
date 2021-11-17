--TEST--
Test fgetc() function : usage variations - closed handle
--ARGS--
--bpc-include-file ext/standard/tests/file/file.inc \
--FILE--
<?php
/*
 Prototype: string fgetc ( resource $handle );
 Description: Gets character from file pointer
*/

/* try reading a char using fgetc() using invalid handles
    - closed file handle
    - unset file handle
*/

// include the header for common test function
include ("file.inc");

echo "*** Testing fgetc() : usage variations ***\n";

echo "-- Testing fgetc() with closed handle --\n";
// open the file for reading
$file_handle = fopen('/proc/self/comm', "r");
// close the file
fclose($file_handle);

// read from closed file
var_dump( fgetc($file_handle) );

echo "-- Testing fgetc() with unset handle --\n";
// open the file for reading
$file_handle = fopen('/proc/self/comm', "r");
// unset the file handle
unset($file_handle);

//fgetc using unset handle
var_dump( fgetc($file_handle) );

echo "Done";
?>
--EXPECTF--
*** Testing fgetc() : usage variations ***
-- Testing fgetc() with closed handle --

Warning: fgetc(): supplied resource is not a valid stream resource in %s on line %d
bool(false)
-- Testing fgetc() with unset handle --

Warning: fgetc() expects parameter 1 to be resource, null given in %s on line %d
bool(false)
Done
