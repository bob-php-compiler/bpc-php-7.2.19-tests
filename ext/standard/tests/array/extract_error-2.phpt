--TEST--
Test extract() function (error conditions)
--FILE--
<?php

/* More than valid number of arguments i.e. 3 args */
var_dump( extract($arr, EXTR_SKIP, "aa", "ee") );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function extract(): 3 at most, 4 provided in %s on line %d
 -- compile-error
