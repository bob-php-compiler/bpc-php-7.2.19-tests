--TEST--
preg_* with bogus vals
--FILE--
<?php

var_dump(preg_quote());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function preg_quote(): 1 required, 0 provided in /%s002-3.php on line 3
 -- compile-error
