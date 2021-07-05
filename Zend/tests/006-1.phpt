--TEST--
strncasecmp() tests
--FILE--
<?php

var_dump(strncasecmp(""));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strncasecmp(): 3 required, 1 provided in %s on line %d
 -- compile-error
