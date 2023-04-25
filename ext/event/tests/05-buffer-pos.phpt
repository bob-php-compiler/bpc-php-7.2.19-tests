--TEST--
Check for manipulation with buffer position
--FILE--
<?php
$eventBufferClass = EVENT_NS . '\\EventBuffer';

/* Count total occurances of 'str' in 'buf' */
function count_instances($buf, $str) {
    $total = 0;
	$p = 0;

    while (1) {
        $p = $buf->search($str, $p);
        if ($p === FALSE) {
            break;
		}
        ++$total;
		++$p;
    }

    return $total;
}

// 1 12 123 1234 .. 123..9
$i = 1;
$s = "";
$a = "";
while ($i < 10) {
	$s .= $i;
	$a .= $s ." ";
	++$i;
}

$buf = new $eventBufferClass();
$buf->add($a);

while (--$i > 0) {
	echo $i, " - ", count_instances($buf, $i), PHP_EOL;
}
?>
--EXPECT--
9 - 1
8 - 2
7 - 3
6 - 4
5 - 5
4 - 6
3 - 7
2 - 8
1 - 9

