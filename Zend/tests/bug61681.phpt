--TEST--
Bug #61681: Malformed grammar
--SKIPIF--
skip TODO
--FILE--
<?php
$la = "ooxx";

echo "${substr('laruence', 0, 2)}";

?>
--EXPECT--
ooxx
