--TEST--
Test fscanf() function: usage variations - file opened in write only mode
--FILE--
<?php

/*
  Prototype: mixed fscanf ( resource $handle, string $format [, mixed &$...] );
  Description: Parses input from a file according to a format
*/

/* Test fscanf() to scan a file for read when file is opened inwrite only mode */

echo "*** Test fscanf(): to read from a file opened in write only mode ***\n";

// create a file
$filename = "fscanf_variation51.tmp";
$file_handle = fopen($filename, "w");
if($file_handle == false)
  exit("Error:failed to open file $filename");
//writing data to the file
@fwrite($file_handle,"sample text\n");

//closing the file
fclose($file_handle);

// various formats
$formats = array( "%d", "%f", "%e", "%u", " %s", "%x", "%o");

$counter = 1;

// various write only modes
$modes = array("w", "wb", "wt",
               "a", "ab", "at",
               "x", "xb", "xt"
         );

$counter = 1;
// reading the values from file using different integer formats
foreach($modes as $mode) {

  $file_handle = fopen($filename, $mode);
  if($file_handle == false) {
    exit("Error:failed to open file $filename");
  }
  echo "\n-- iteration $counter --\n";

  foreach($formats as $format) {
    var_dump( fscanf($file_handle,$format) );
    rewind($file_handle);
  }
  $counter++;
  fclose($file_handle);
  unlink($filename);
}

echo "\n*** Done ***";
?>
--CLEAN--
<?php
$filename = "fscanf_variation51.tmp";
if(file_exists($filename)) {
  unlink($filename);
}
?>
--EXPECT--
*** Test fscanf(): to read from a file opened in write only mode ***

-- iteration 1 --
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)

-- iteration 2 --
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)

-- iteration 3 --
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)

-- iteration 4 --
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)

-- iteration 5 --
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)

-- iteration 6 --
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)

-- iteration 7 --
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)

-- iteration 8 --
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)

-- iteration 9 --
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)

*** Done ***
