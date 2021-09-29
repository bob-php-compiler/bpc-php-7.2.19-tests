--TEST--
Test array_change_key_case() function - 3
--FILE--
<?php
var_dump( array_change_key_case() ); // Zero argument
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_change_key_case(): 1 required, 0 provided in %s on line 2
 -- compile-error
