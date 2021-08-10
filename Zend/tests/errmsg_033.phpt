--TEST--
errmsg: __destruct() cannot be static
--FILE--
<?php

class test {

	static function __destruct() {
	}
}

echo "Done\n";
?>
--EXPECTF--
Warning: in %s line 5: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

*** ERROR:compile-error:
Error: Destructor test::__destruct() cannot be static in %s on line %d
 -- compile-error
