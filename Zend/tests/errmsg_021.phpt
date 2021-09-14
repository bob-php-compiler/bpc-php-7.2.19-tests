--TEST--
errmsg: disabled class
--SKIPIF--
skip no ini disable_classes
--INI--
disable_classes=stdclass
--FILE--
<?php

class test extends stdclass {
}

$t = new test;

echo "Done\n";
?>
--EXPECTF--
Warning: test() has been disabled for security reasons in %s on line %d
Done
