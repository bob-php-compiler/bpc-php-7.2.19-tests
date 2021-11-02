--TEST--
quoted_printable_encode() tests - 1
--FILE--
<?php

var_dump(quoted_printable_encode());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function quoted_printable_encode(): 1 required, 0 provided in %s on line %d
 -- compile-error
