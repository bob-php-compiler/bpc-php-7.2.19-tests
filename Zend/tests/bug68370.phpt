--TEST--
Bug #68370 "unset($this)" can make the program crash
--FILE--
<?php
class C {
	public function test() {
		unset($this);
	}
}
$c = new C();
$x = $c->test();
print_r($x);
unset($c, $x);
--EXPECTF--
Parse error: Cannot unset $this in %sbug68370.php on line 4
