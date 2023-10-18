--TEST--
SPL: SplObjectStorage null coalescing operator memory leak
--FILE--
<?php
// In maintainer zts mode, this should no longer
// detect memory leaks for the objects
$a = new stdClass();
$b = new stdClass();
$map = new SplObjectStorage();
$map[$a] = 'foo';
var_dump(isset($map[$b]) ? $map[$b] : null);
var_dump(isset($map[$a]) ? $map[$a] : null);
--EXPECTF--
NULL
string(3) "foo"
