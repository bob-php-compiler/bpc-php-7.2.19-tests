--TEST--
Test fscanf() function: usage variations - hexa formats with boolean
--FILE--
<?php

/*
  Prototype: mixed fscanf ( resource $handle, string $format [, mixed &$...] );
  Description: Parses input from a file according to a format
*/

/* Test fscanf() to scan boolean data using different hexa format types */

echo "*** Test fscanf(): different hexa format types with boolean data ***\n";

// create a file
$filename = "fscanf_variation38.tmp";
$file_handle = fopen($filename, "w");
if($file_handle == false)
  exit("Error:failed to open file $filename");

// array of boolean types
$bool_types = array (
  true,
  false,
  TRUE,
  FALSE,
);

$hexa_formats = array( "%x", "%hx", "%lx", "%Lx", " %x", "%x ", "% x", "\t%x", "\n%x", "%4x", "%30x", "%[0-9]", "%*x");

$counter = 1;

// writing to the file
foreach($bool_types as $value) {
  @fprintf($file_handle, $value);
  @fprintf($file_handle, "\n");
}
// closing the file
fclose($file_handle);

// opening the file for reading
$file_handle = fopen($filename, "r");
if($file_handle == false) {
  exit("Error:failed to open file $filename");
}

$counter = 1;
// reading the values from file using different hexa formats
foreach($hexa_formats as $hexa_format) {
  // rewind the file so that for every foreach iteration the file pointer starts from bof
  rewind($file_handle);
  echo "\n-- iteration $counter --\n";
  while( !feof($file_handle) ) {
    var_dump( fscanf($file_handle,$hexa_format) );
  }
  $counter++;
}

echo "\n*** Done ***";
?>
--CLEAN--
<?php
$filename = "fscanf_variation38.tmp";
unlink($filename);
?>
--EXPECTF--
*** Test fscanf(): different hexa format types with boolean data ***

-- iteration 1 --
array(1) {
  [0]=>
  int(1)
}
NULL
array(1) {
  [0]=>
  int(1)
}
NULL
bool(false)

-- iteration 2 --
array(1) {
  [0]=>
  int(1)
}
NULL
array(1) {
  [0]=>
  int(1)
}
NULL
bool(false)

-- iteration 3 --
array(1) {
  [0]=>
  int(1)
}
NULL
array(1) {
  [0]=>
  int(1)
}
NULL
bool(false)

-- iteration 4 --
array(1) {
  [0]=>
  int(1)
}
NULL
array(1) {
  [0]=>
  int(1)
}
NULL
bool(false)

-- iteration 5 --
array(1) {
  [0]=>
  int(1)
}
NULL
array(1) {
  [0]=>
  int(1)
}
NULL
bool(false)

-- iteration 6 --
array(1) {
  [0]=>
  int(1)
}
NULL
array(1) {
  [0]=>
  int(1)
}
NULL
bool(false)

-- iteration 7 --

Warning: fscanf(): Bad scan conversion character " " in %s on line %d
NULL

Warning: fscanf(): Bad scan conversion character " " in %s on line %d
NULL

Warning: fscanf(): Bad scan conversion character " " in %s on line %d
NULL

Warning: fscanf(): Bad scan conversion character " " in %s on line %d
NULL
bool(false)

-- iteration 8 --
array(1) {
  [0]=>
  int(1)
}
NULL
array(1) {
  [0]=>
  int(1)
}
NULL
bool(false)

-- iteration 9 --
array(1) {
  [0]=>
  int(1)
}
NULL
array(1) {
  [0]=>
  int(1)
}
NULL
bool(false)

-- iteration 10 --
array(1) {
  [0]=>
  int(1)
}
NULL
array(1) {
  [0]=>
  int(1)
}
NULL
bool(false)

-- iteration 11 --
array(1) {
  [0]=>
  int(1)
}
NULL
array(1) {
  [0]=>
  int(1)
}
NULL
bool(false)

-- iteration 12 --
array(1) {
  [0]=>
  string(1) "1"
}
array(1) {
  [0]=>
  NULL
}
array(1) {
  [0]=>
  string(1) "1"
}
array(1) {
  [0]=>
  NULL
}
bool(false)

-- iteration 13 --
array(0) {
}
NULL
array(0) {
}
NULL
bool(false)

*** Done ***
