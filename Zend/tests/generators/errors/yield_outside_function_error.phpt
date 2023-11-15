--TEST--
Yield cannot be used outside of functions
--FILE--
<?php

yield "Test";

?>
--EXPECTF--
*** ERROR:compile-error:
Error: The "yield" expression can only be used inside a function in %s on line %d
 -- compile-error
