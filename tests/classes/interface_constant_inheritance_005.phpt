--TEST--
Ensure a interface can have public constants
--FILE--
<?php
interface IA {
	public const FOO = 10;
}

echo "Done\n";
?>
--EXPECTF--
Parse error: %s in %s on line 3
