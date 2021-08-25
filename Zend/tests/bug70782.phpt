--TEST--
Bug #70782: null ptr deref and segfault (zend_get_class_fetch_type)
--FILE--
<?php

(-0)::$prop;

?>
--EXPECTF--
Parse error: %s in %s on line %d
