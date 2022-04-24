--TEST--
Bug #73471 PHP freezes with AppendIterator
--FILE--
<?php

$iterator = new AppendIterator();
$events = new ArrayIterator(array(1,2,3,4,5));
$events2 = new ArrayIterator(array('a', 'b', 'c'));
$iterator->append($events);
foreach($events as $event){}
$iterator->append($events2);
?>
===DONE===
--EXPECT--
===DONE===
