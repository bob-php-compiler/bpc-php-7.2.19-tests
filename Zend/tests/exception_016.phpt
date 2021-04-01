--TEST--
Exceptions on improper usage of $this
--FILE--
<?php
try {
	$this->foo();
} catch (Error $e) {
	echo "\nException: " . $e->getMessage() . " in " , $e->getFile() . " on line " . $e->getLine() . "\n";
}

$this->foo();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Using $this when not in object context in %sexception_016.php on line %d
 -- compile-error
