--TEST--
Test fileperms(), chmod() functions: error conditions
--FILE--
<?php

/* With args greater than expected */
$fp = fopen("./006_error.tmp", "w");
fclose($fp);
var_dump( fileperms("./006_error.tmp", 0777) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function fileperms(): 1 at most, 2 provided in %s on line %d
 -- compile-error
