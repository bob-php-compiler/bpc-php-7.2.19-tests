--TEST--
Bug #70258 (Segfault if do_resize fails to allocated memory)
--INI--
memory_limit=2M
--FILE--
<?php
class A {
	public $arr;
	public function core() {
		$this->arr["no_pack"] = 1;
		while (1) {
			$this->arr[] = 1;
		}
	}
}

$a = new A;
$a->core();
?>
--EXPECTF--
Fatal error: GC Warning: Out of Memory! Heap size: 4 MiB. Returning NULL! in %s on line %d
