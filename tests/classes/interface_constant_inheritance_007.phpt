--TEST--
Ensure a interface can not have private constants
--FILE--
<?php
interface A {
	private const FOO = 10;
}
--EXPECTF--
Parse error: %s in %s on line 3
