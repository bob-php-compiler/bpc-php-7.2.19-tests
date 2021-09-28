--TEST--
$this in foreach
--FILE--
<?php
$a = array(1);
foreach ($a as $this) {
	var_dump($this);
}
?>
--EXPECTF--
Parse error: Cannot re-assign $this in %sthis_in_foreach_001.php on line %d
