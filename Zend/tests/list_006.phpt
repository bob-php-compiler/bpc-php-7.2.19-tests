--TEST--
Testing nested list() with empty array
--SKIPIF--
skip not support nested list
--FILE--
<?php

list($a, list($b, list(list($d)))) = array();

?>
--EXPECTF--
Notice: Undefined offset: 0 in %s on line %d

Notice: Undefined offset: 1 in %s on line %d
