--TEST--
Check for EventBuffer methods' behaviour
--FILE--
<?php
$eventBufferClass = EVENT_NS . '\\EventBuffer';

$s     = "abcdefghijklmnopqrstuvwxyz";
$s_len = strlen($s);
$b1    = new $eventBufferClass();
$b2    = new $eventBufferClass();

$b1->add($s);

$tmp = "";
for ($i = 0, $j = 1; $i < $s_len; $i += 4, ++$j) {
	if ($b2->appendFrom($b1, 4)) {
		$tmp = $b2->read(32);
		echo $j, ' ', $tmp == substr($s, $i, 4) ? "ok" : "failed", PHP_EOL;
	}
}

$b3 = new $eventBufferClass();
$b3->add("123");
echo "$j ", $b3->search("23", 1, 10) == 1 ? "ok" : "failed", PHP_EOL;


$s = "";
$b4 = new $eventBufferClass();
for ($i = 0; $i < 10; ++$i) {
	$s .= $i;
}
$b4->add($s);

$success = TRUE;
for ($i = 0; $i < 10; ++$i) {
	for ($j = 1; $j < 10; ++$j) {
		if ($b4->substr($i, $j) != substr($s, $i, $j)) {
			$success = FALSE;
			break;
		}
	}
}
echo "9 ", $success ? "ok" : "failed";

?>
--EXPECT--
1 ok
2 ok
3 ok
4 ok
5 ok
6 ok
7 ok
8 ok
9 ok

