--TEST--
Bug #72684 (AppendIterator segfault with closed generator)
--FILE--
<?php

function createGenerator() { yield 1; }
$generator = createGenerator();

$appendIterator = new AppendIterator();
$appendIterator->append($generator);

var_dump(iterator_to_array($appendIterator));
try {
	var_dump(iterator_to_array($appendIterator));
} catch (Exception $e) {
	echo $e->getMessage();
}

?>
--EXPECT--
array(1) {
  [0]=>
  int(1)
}
array(0) {
}
