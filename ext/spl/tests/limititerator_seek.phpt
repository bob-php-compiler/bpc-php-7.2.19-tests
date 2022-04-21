--TEST--
SPL: LimitIterator seek() arguments
--CREDITS--
Roshan Abraham (roshanabrahams@gmail.com)
TestFest London May 2009
--FILE--
<?php

$a = array(1,2,3);
$lt = new LimitIterator(new ArrayIterator($a));

$lt->seek(1,1); // Should throw a warning as seek expects only 1 argument

?>
--EXPECTF--
Warning: Too many arguments to method LimitIterator::seek(): 1 at most, 2 provided in %s on line %d
