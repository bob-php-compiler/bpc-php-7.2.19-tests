--TEST--
Test fseek(), ftell() & rewind() functions : error conditions - fseek()
--FILE--
<?php

/* Prototype: int fseek ( resource $handle, int $offset [, int $whence] );
   Description: Seeks on a file pointer

   Prototype: bool rewind ( resource $handle );
   Description: Rewind the position of a file pointer

   Prototype: int ftell ( resource $handle );
   Description: Tells file pointer read/write position
*/

echo "*** Testing fseek() : error conditions ***\n";

$fp = fopen('/proc/self/comm', "r");

// test invalid arguments : non-resources
echo "-- Testing fseek() with invalid arguments --\n";
$invalid_args = array (
  "string",
  10,
  10.5,
  true,
  array(1,2,3),
  new stdclass
);
/* loop to test fseek() with different invalid type of args */
for($loop_counter = 1; $loop_counter <= count($invalid_args); $loop_counter++) {
  echo "-- Iteration $loop_counter --\n";
  var_dump( fseek($invalid_args[$loop_counter - 1], 10) );
}

// fseek() on a file handle which is already closed
echo "-- Testing fseek() with closed/unset file handle --";
fclose($fp);
var_dump(fseek($fp,10));

// fseek() on a file handle which is unset
$file_handle = fopen('/proc/self/comm', "r");
unset($file_handle); //unset file handle
var_dump( fseek(@$file_handle,10));

echo "Done\n";
?>
--EXPECTF--
*** Testing fseek() : error conditions ***
-- Testing fseek() with invalid arguments --
-- Iteration 1 --

Warning: fseek() expects parameter 1 to be resource, string given in %s on line %d
bool(false)
-- Iteration 2 --

Warning: fseek() expects parameter 1 to be resource, integer given in %s on line %d
bool(false)
-- Iteration 3 --

Warning: fseek() expects parameter 1 to be resource, float given in %s on line %d
bool(false)
-- Iteration 4 --

Warning: fseek() expects parameter 1 to be resource, boolean given in %s on line %d
bool(false)
-- Iteration 5 --

Warning: fseek() expects parameter 1 to be resource, array given in %s on line %d
bool(false)
-- Iteration 6 --

Warning: fseek() expects parameter 1 to be resource, object given in %s on line %d
bool(false)
-- Testing fseek() with closed/unset file handle --
Warning: fseek(): supplied resource is not a valid stream resource in %s on line %d
bool(false)

Warning: fseek() expects parameter 1 to be resource, null given in %s on line %d
bool(false)
Done
