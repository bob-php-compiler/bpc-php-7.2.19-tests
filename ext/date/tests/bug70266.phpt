--TEST--
Bug #70266 (DateInterval::__construct.interval_spec is not supposed to be optional)
--SKIPIF--
skip Reflection
--FILE--
<?php
var_dump((new ReflectionParameter(['DateInterval', '__construct'], 0))->isOptional());
?>
--EXPECT--
bool(false)
