--TEST--
Bug #68992 (json_encode stacks exceptions thrown by JsonSerializable classes)
--SKIPIF--
<?php
if (!extension_loaded('json')) die('skip');
?>
--FILE--
<?php

class MyClass implements JsonSerializable {
    public function jsonSerialize() {
	    throw new Exception('Not implemented!');
	}
}
$classes = array();
for($i = 0; $i < 5; $i++) {
    $classes[] = new MyClass();
}

try {
    json_encode($classes);
} catch(Exception $e) {
    do {
	    printf("%s (%d) [%s]\n", $e->getMessage(), $e->getCode(), get_class($e));
	} while ($e = $e->getPrevious());
}
?>
--EXPECT--
Not implemented! (0) [Exception]
