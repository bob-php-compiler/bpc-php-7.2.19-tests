--TEST--
Testing __unset() with protected visibility
--FILE--
<?php

class foo {
	protected function __unset($a) {
		print "unset\n";
	}
}

?>
--EXPECTF--
*** ERROR:compile-error:
Error: The magic method foo::__unset() must have public visibility in %s on line %d
 -- compile-error
