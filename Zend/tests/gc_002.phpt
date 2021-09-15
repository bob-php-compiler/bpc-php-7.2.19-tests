--TEST--
GC 002: gc_enable()/gc_diable() and ini_get()
--FILE--
<?php
gc_disable();
var_dump(gc_enabled());
var_dump(ini_get('zend.enable_gc'));
gc_enable();
var_dump(gc_enabled());
var_dump(ini_get('zend.enable_gc'));
?>
--EXPECT--
bool(false)
bool(false)
bool(true)
bool(false)
