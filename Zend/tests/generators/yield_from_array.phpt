--TEST--
yielding values from an array
--FILE--
<?php
function from() {
	yield 0;
	yield from array(); // must not yield anything
	yield from array(1,2);
}

function gen() {
	yield from from();
}

foreach(gen() as $v) {
	var_dump($v);
}
?>
--EXPECT--
int(0)
int(1)
int(2)
