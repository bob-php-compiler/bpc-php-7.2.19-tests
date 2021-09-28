--TEST--
Bug #70782: null ptr deref and segfault (zend_get_class_fetch_type)
--FILE--
<?php

(1)::$prop;

?>
--EXPECTF--
Parse error: Illegal class name in %s on line %d
