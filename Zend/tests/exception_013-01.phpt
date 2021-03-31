--TEST--
Attempt to unset static property
--FILE--
<?php

unset(C::$a);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Attempt to unset static property C::$a in %s on line %d
 -- compile-error
