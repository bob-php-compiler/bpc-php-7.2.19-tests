--TEST--
preg_* with bogus vals
--FILE--
<?php

var_dump(preg_match_all());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function preg_match_all(): 2 required, 0 provided in %s002-2.php on line 3
 -- compile-error
