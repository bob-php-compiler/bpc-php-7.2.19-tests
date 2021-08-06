--TEST--
Bug #48667 (Implementing both iterator and iteratoraggregate)
--FILE--
<?php

abstract class A implements IteratorAggregate, Iterator { }

?>
--EXPECTF--
Parse error: a class cannot implement both Iterator and IteratorAggregate at the same time in %s on line %d
