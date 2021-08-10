--TEST--
errmsg: __construct() cannot be static
--FILE--
<?php

class test {

	static function __construct() {
	}
}

echo "Done\n";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Constructor test::__construct() cannot be static in %s on line %d
 -- compile-error
