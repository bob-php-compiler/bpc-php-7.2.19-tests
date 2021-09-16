--TEST--
Bug #39036 (Unsetting key of foreach() yields segmentation fault)
--FILE--
<?php

$key = 'asdf';

foreach (array('key' => 'asdf', 'value' => null) as $key => $value) {
	unset($$key);
}

var_dump($key);

echo "Done\n";
?>
--EXPECT--
string(5) "value"
Done
