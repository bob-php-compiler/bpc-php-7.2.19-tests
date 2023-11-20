--TEST--
Bug #72523 (dtrace issue with reflection (failed test))
--SKIPIF--
skip not support anonymous class
--FILE--
<?php

$gen = (new class() {
	function a() {
		yield "okey";
	}
})->a();

var_dump($gen->current());
?>
--EXPECT--
string(4) "okey"
