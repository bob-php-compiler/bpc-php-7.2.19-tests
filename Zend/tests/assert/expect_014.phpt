--TEST--
test failing assertion when disabled
--SKIPIF--
skip TODO assert()
--INI--
zend.assertions=0
assert.exception=1
--FILE--
<?php
assert(false);
var_dump(true);
?>
--EXPECT--
bool(true)
