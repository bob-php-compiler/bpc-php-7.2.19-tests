--TEST--
Method call on string literal
--FILE--
<?php
"string"->length();
?>
--EXPECTF--
Parse error: %s in %s on line 2
