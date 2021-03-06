--TEST--
ZE2 Autoload and derived classes
--SKIPIF--
<?php
	if (class_exists('autoload_root', false)) die('skip Autoload test classes exist already');
?>
--ARGS--
--bpc-php-exts .php,.p5c --bpc-include-file tests/classes/autoload_root.p5c --bpc-include-file tests/classes/autoload_derived.p5c \
--FILE--
<?php

spl_autoload_register(function ($class_name) {
	require_once(dirname(__FILE__) . '/' . $class_name . '.p5c');
	echo 'autoload(' . $class_name . ")\n";
});

var_dump(class_exists('autoload_derived'));

?>
===DONE===
--EXPECT--
autoload(autoload_root)
autoload(autoload_derived)
bool(true)
===DONE===
