--TEST--
Empty statement in assert() shouldn't segfault
--SKIPIF--
skip TODO assert()
--FILE--
<?php

assert((function () { return true;; })());
echo "ok";

?>
--EXPECT--
ok
