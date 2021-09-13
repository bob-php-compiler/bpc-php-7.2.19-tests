--TEST--
Dynamic class names can't be used in compile-time constant refs
--FILE--
<?php

$foo = 'test';
define('C', $foo::BAR);

?>
--EXPECTF--
Parse error: Dynamic class names are not allowed in compile-time class constant references in %s on line %d
