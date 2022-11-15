--TEST--
class name as scalar from ::class keyword error using parent in non class context
--FILE--
<?php

$x = parent::class;

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Cannot use "parent" when no class scope is active in %s on line 3
 -- compile-error
