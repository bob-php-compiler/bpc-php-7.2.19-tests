--TEST--
Bug #70918 (Segfault using static outside of class scope)
--FILE--
<?php
try {
	self::x;
} catch (Error $e) {
	var_dump($e->getMessage());
}
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Cannot access self:: when no class scope is active in %s on line 3
 -- compile-error
