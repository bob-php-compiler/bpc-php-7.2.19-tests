--TEST--
Bug #70240 (Segfault when doing unset($var()))
--FILE--
<?php
unset($var());
?>
--EXPECTF--
Parse error: Can't use function return value in write context in %sbug70240.php on line %d
