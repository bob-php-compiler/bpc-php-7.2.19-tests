--TEST--
Foreach loop tests - error case: key is a reference.
--FILE--
<?php
$a = array("a","b","c");
foreach ($a as &$k=>$v) {
  var_dump($v);
}
?>
--EXPECTF--
Parse error: %s in %s on line 3
