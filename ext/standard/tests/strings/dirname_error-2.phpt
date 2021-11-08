--TEST--
Test dirname() function : error conditions
--FILE--
<?php
/* Prototype: string dirname ( string $path );
   Description: Returns directory name component of path.
*/
echo "*** Testing error conditions ***\n";

// more than expected no. of arguments
var_dump( dirname("/var/tmp/bar.gz", 1, ".gz") );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function dirname(): 2 at most, 3 provided in %s on line %d
 -- compile-error
