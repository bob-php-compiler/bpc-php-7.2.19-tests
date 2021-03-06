--TEST--
Test fgetc() function : error conditions
--FILE--
<?php
/*
 Prototype: string fgetc ( resource $handle );
 Description: Gets character from file pointer
*/

echo "*** Testing error conditions ***\n";

// test invalid arguments : non-resources
echo "-- Testing fgetc() with invalid arguments --\n";
$invalid_args = array (
  "string",
  10,
  10.5,
  true,
  array(1,2,3),
  new stdclass,
);
/* loop to test fgetc() with different invalid type of args */
for($loop_counter = 1; $loop_counter <= count($invalid_args); $loop_counter++) {
  echo "-- Iteration $loop_counter --\n";
  var_dump( fgetc($invalid_args[$loop_counter - 1]) );
}

echo "Done\n";
?>
--EXPECTF--
*** Testing error conditions ***
-- Testing fgetc() with invalid arguments --
-- Iteration 1 --

Warning: fgetc() expects parameter 1 to be resource, string given in %s on line %d
bool(false)
-- Iteration 2 --

Warning: fgetc() expects parameter 1 to be resource, integer given in %s on line %d
bool(false)
-- Iteration 3 --

Warning: fgetc() expects parameter 1 to be resource, float given in %s on line %d
bool(false)
-- Iteration 4 --

Warning: fgetc() expects parameter 1 to be resource, boolean given in %s on line %d
bool(false)
-- Iteration 5 --

Warning: fgetc() expects parameter 1 to be resource, array given in %s on line %d
bool(false)
-- Iteration 6 --

Warning: fgetc() expects parameter 1 to be resource, object given in %s on line %d
bool(false)
Done
