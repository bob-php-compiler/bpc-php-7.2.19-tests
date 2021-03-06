--TEST--
Bug #73392 (A use-after-free in zend allocator management)
--FILE--
<?php
class Rep {
	public function __invoke($match) {
		return "d";
	}
}
class Foo {
	public static function rep($rep) {
		return "ok";
	}
}
function b($match) {
	return "b";
}
var_dump(preg_replace_callback_array(
	array(
		"/a/" => 'b',	"/b/" => function ($match) { return "c"; }, "/c/" => new Rep, "reporting" => array("Foo", "rep"),  "a1" => array("Foo", "rep"),
	), 'a'));
?>
--EXPECTF--
Warning: preg_replace_callback_array(): Delimiter must not be alphanumeric or backslash in %sbug73392.php on line %d

Warning: preg_replace_callback_array(): Delimiter must not be alphanumeric or backslash in %sbug73392.php on line %d
NULL
