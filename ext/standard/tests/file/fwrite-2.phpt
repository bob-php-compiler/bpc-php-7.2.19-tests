--TEST--
fwrite() tests
--FILE--
<?php

var_dump(fwrite(array()));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function fwrite(): 2 required, 1 provided in %s on line %d
 -- compile-error
