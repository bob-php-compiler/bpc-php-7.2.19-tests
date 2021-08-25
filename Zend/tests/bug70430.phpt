--TEST--
Bug #70430: Stack buffer overflow in zend_language_parser()
--FILE--
<?php

$"*** Testing function() :  ***\n";

?>
--EXPECTF--
Parse error: %s in %s on line %d
