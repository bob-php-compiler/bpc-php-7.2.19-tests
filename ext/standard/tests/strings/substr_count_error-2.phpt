--TEST--
Test substr_count() function (error conditions)
--FILE--
<?php

echo "\n*** Testing error conditions ***\n";
$str = 'abcdefghik';

/* more than expected no. of args */
var_dump( substr_count($str, "t", 0, 15, 30) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function substr_count(): 4 at most, 5 provided in %s on line %d
 -- compile-error
