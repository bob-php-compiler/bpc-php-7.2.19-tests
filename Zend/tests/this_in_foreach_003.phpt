--TEST--
$this in foreach
--SKIPIF--
skip not support foreach as reference
--FILE--
<?php
$a = [1];
foreach ($a as &$this) {
	var_dump($this);
}
?>
--EXPECTF--
Fatal error: Cannot re-assign $this in %sthis_in_foreach_003.php on line 3
