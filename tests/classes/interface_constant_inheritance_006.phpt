--TEST--
Ensure a interface can not have protected constants
--FILE--
<?php
interface A {
	protected const FOO = 10;
}
--EXPECTF--
Parse error: %s in %s on line 3
