--TEST--
Test fpassthru() function: Error conditions
--FILE--
<?php
/*
Prototype: int fpassthru ( resource $handle );
Description: Reads to EOF on the given file pointer from the current position
  and writes the results to the output buffer.
*/

echo "*** Test error conditions of fpassthru() function ***\n";

/* Non-existing file resource */
$no_file = fread("/no/such/file", "r");
var_dump( fpassthru($no_file) );

echo "\n*** Done ***\n";

?>
--EXPECTF--
*** Test error conditions of fpassthru() function ***

Warning: fread() expects parameter 1 to be resource, string given in %s on line %d

Warning: fpassthru() expects parameter 1 to be resource, boolean given in %s on line %d
bool(false)

*** Done ***
