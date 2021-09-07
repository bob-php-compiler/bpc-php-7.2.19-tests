--TEST--
Bug #70240 (Segfault when doing unset($var()))
--FILE--
<?php
unset($var());
?>
--EXPECTF--
Parse error: %s in %sbug70240.php on line %d
