--TEST--
Bug #70895 null ptr deref and segfault with crafted callable
--FILE--
<?php

array_map("%n", 0);
array_map("%n %i", 0);
array_map("%n %i aoeu %f aoeu %p", 0);
?>
--EXPECTF--
Warning: array_map() expects parameter 1 to be callable, %n given in %s on line 3

Warning: array_map() expects parameter 1 to be callable, %s given in %s on line 4

Warning: array_map() expects parameter 1 to be callable, %s given in %s on line 5
