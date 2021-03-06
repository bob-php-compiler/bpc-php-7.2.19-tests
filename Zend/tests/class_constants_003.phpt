--TEST--
class constants as default function arguments and dynamically loaded classes
--SKIPIF--
skip function signatures before global code
--FILE--
<?php

$class_data = <<<DATA
<?php
class test {
	const val = 1;
}
?>
DATA;

$filename = dirname(__FILE__)."/cc003.dat";
file_put_contents($filename, $class_data);

function foo($v = test::val) {
	var_dump($v);
}

include $filename;

foo();
foo(5);

unlink($filename);

echo "Done\n";
?>
--EXPECTF--
int(1)
int(5)
Done
