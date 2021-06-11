--TEST--
Attempt to unset static property
--FILE--
<?php

unset(C::$a);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Attempt to unset static property of class C in %s on line %d
 -- compile-error
