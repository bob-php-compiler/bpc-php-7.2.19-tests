--TEST--
errmsg: cannot redeclare (method)
--FILE--
<?php

class test {

	function foo() {}
	function foo() {}

}

echo "Done\n";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Cannot redeclare test::foo() in %s on line %d
 -- compile-error
