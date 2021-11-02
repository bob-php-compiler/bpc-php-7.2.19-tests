--TEST--
quoted_printable_encode() tests - 1
--FILE--
<?php

var_dump(quoted_printable_encode("test", "more"));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function quoted_printable_encode(): 1 at most, 2 provided in %s on line %d
 -- compile-error
