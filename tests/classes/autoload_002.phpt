--TEST--
ZE2 Autoload and get_class_methods
--SKIPIF--
<?php
	if (class_exists('autoload_root', false)) die('skip Autoload test classes exist already');
?>
--ARGS--
--bpc-php-exts .php,.p5c --bpc-include-file tests/classes/autoload_root.p5c \
--FILE--
<?php

spl_autoload_register(function ($class_name) {
	require_once(dirname(__FILE__) . '/' . $class_name . '.p5c');
	echo 'autoload(' . $class_name . ")\n";
});

var_dump(get_class_methods('autoload_root'));

?>
===DONE===
--EXPECT--
autoload(autoload_root)
array(1) {
  [0]=>
  string(12) "testFunction"
}
===DONE===
