--TEST--
Bug #70918 (Segfault using static outside of class scope)
--FILE--
<?php
try {
	static::$i;
} catch (Error $e) {
	var_dump($e->getMessage());
}
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Cannot access static:: when no class scope is active in %s on line %d
 -- compile-error
