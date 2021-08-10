--TEST--
Testing __unset declaring as static
--FILE--
<?php

class foo {
	static function __unset($a) {
		print "unset\n";
	}
}

?>
--EXPECTF--
*** ERROR:compile-error:
Error: The magic method foo::__unset() cannot be static in %s on line %d
 -- compile-error
