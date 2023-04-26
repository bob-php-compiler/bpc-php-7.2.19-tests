--TEST--
Check for EventBuffer::pullup method behavior
--FILE--
<?php
$eventBuffereClass = EVENT_NS . '\\EventBuffer';

$a = array(
	"",
	"test",
	"\0\0\0",
);

foreach ($a as $s) {
	$b = new $eventBuffereClass();
	$b->add($s);
	$s_pullup = $b->pullup(-1);
	if (is_null($s_pullup)) {
		// pullup return null when no data availble
		var_dump(empty($s));
	} else {
		var_dump(strlen($s_pullup) == strlen($s) && $s_pullup == $s);
	}
}
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
