--TEST--
Bug #74519 strange behavior of AppendIterator
--FILE--
<?php

$iterator = new AppendIterator();
$events = new ArrayIterator(array(1,2,3,4,5));
$iterator->append($events);

$events->next();

while($iterator->valid()) {
	echo $iterator->current(), "\n";
	$iterator->next();
}
?>
===DONE===
--EXPECT--
1
3
4
5
===DONE===
