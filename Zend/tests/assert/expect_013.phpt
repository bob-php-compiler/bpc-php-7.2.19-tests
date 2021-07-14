--TEST--
test failing assertion when disabled (with return value)
--SKIPIF--
skip TODO assert()
--INI--
zend.assertions=0
assert.exception=1
--FILE--
<?php
var_dump(assert(false));
?>
--EXPECT--
bool(true)
