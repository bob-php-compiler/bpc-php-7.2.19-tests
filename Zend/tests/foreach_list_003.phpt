--TEST--
foreach with list key
--SKIPIF--
skip not support foreach as list()
--FILE--
<?php

$array = [['a', 'b'], 'c', 'd'];

foreach($array as list($key) => list(list(), $a)) {
}

?>
--EXPECTF--
Fatal error: Cannot use list as key element in %sforeach_list_003.php on line %d
