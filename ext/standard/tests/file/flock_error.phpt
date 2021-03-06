--TEST--
Test flock() function: Error conditions
--FILE--
<?php
/*
Prototype: bool flock(resource $handle, int $operation [, int &$wouldblock]);
Description: PHP supports a portable way of locking complete files
  in an advisory way
*/

echo "*** Testing error conditions ***\n";

$file = "flock.tmp";
$fp = fopen($file, "w");

/* array of operatons */
$operations = array(
  0,
  LOCK_NB,
  FALSE,
  NULL,
  array(1,2,3),
  array(),
  "string",
  "",
  "\0"
);

$i = 0;
foreach($operations as $operation) {
  echo "\n--- Iteration $i ---";
  var_dump(flock($fp, $operation));
  $i++;
}


/* Invalid arguments */
$fp = fopen($file, "w");
fclose($fp);
var_dump(flock($fp, LOCK_SH|LOCK_NB));

var_dump(flock("", "", $var));

echo "\n*** Done ***\n";
?>
--CLEAN--
<?php
$file = "flock.tmp";
unlink($file);
?>
--EXPECTF--
*** Testing error conditions ***

--- Iteration 0 ---
Warning: flock(): Illegal operation argument in %s on line %d
bool(false)

--- Iteration 1 ---
Warning: flock(): Illegal operation argument in %s on line %d
bool(false)

--- Iteration 2 ---
Warning: flock(): Illegal operation argument in %s on line %d
bool(false)

--- Iteration 3 ---
Warning: flock(): Illegal operation argument in %s on line %d
bool(false)

--- Iteration 4 ---
Warning: flock() expects parameter 2 to be integer, array given in %s on line %d
NULL

--- Iteration 5 ---
Warning: flock() expects parameter 2 to be integer, array given in %s on line %d
NULL

--- Iteration 6 ---
Warning: flock() expects parameter 2 to be integer, string given in %s on line %d
NULL

--- Iteration 7 ---
Warning: flock() expects parameter 2 to be integer, string given in %s on line %d
NULL

--- Iteration 8 ---
Warning: flock() expects parameter 2 to be integer, string given in %s on line %d
NULL

Warning: flock(): supplied resource is not a valid stream resource in %s on line %d
bool(false)

Warning: flock() expects parameter 1 to be resource, string given in %s on line %d
NULL

*** Done ***
