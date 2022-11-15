--TEST--
class name as scalar from ::class keyword error using static non class context
--FILE--
<?php

$x = static::class;

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Cannot use "static" when no class scope is active in %s on line 3
 -- compile-error
