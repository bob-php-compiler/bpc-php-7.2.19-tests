--TEST--
errmsg: cannot redeclare property
--FILE--
<?php

class test {
	var $var;
	var $var;
}

echo "Done\n";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Cannot redeclare test::$var in %s on line %d
 -- compile-error
