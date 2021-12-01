--TEST--
parse_ini_string() multiple calls
--FILE--
<?php

var_dump(parse_ini_string(1,1,1,1));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function parse_ini_string(): 3 at most, 4 provided in %s on line %d
 -- compile-error
