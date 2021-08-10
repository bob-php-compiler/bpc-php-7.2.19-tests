--TEST--
errmsg: __clone() cannot be static
--FILE--
<?php

class test {

	static function __clone() {
	}
}

echo "Done\n";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: The magic method test::__clone() cannot be static in %s on line %d
 -- compile-error
