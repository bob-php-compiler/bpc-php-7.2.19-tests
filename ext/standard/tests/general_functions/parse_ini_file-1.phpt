--TEST--
parse_ini_file() multiple calls
--FILE--
<?php

var_dump(parse_ini_file());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function parse_ini_file(): 1 required, 0 provided in %s on line %d
 -- compile-error
