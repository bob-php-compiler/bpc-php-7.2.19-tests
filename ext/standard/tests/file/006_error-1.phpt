--TEST--
Test fileperms(), chmod() functions: error conditions
--FILE--
<?php

/* With args less than expected */
$fp = fopen("./006_error.tmp", "w");
fclose($fp);
var_dump( chmod("./006_error.tmp") );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function chmod(): 2 required, 1 provided in %s on line %d
 -- compile-error
