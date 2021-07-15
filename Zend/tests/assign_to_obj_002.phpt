--TEST--
Assign to $this leaks when $this not defined
--FILE--
<?php

try {
	$this->a = new stdClass;
} catch (Error $e) { echo $e->getMessage(), "\n"; }

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Using $this when not in object context in %s on line %d
 -- compile-error
