--TEST--
ZE2 type
--FILE--
<?php
class T {
	function f(P $p = 42) {
	}
}
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Default value for parameters with a class type can only be NULL in %stype_hints_003.php on line 3
 -- compile-error
