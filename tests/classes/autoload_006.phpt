--TEST--
ZE2 Autoload from destructor
--SKIPIF--
<?php
	if (class_exists('autoload_root', false)) die('skip Autoload test classes exist already');
?>
--ARGS--
--bpc-php-exts .php,.p5c --bpc-include-file tests/classes/autoload_interface.p5c --bpc-include-file tests/classes/autoload_implements.p5c \
--FILE--
<?php

spl_autoload_register(function ($class_name) {
	require_once(dirname(__FILE__) . '/' . strtolower($class_name) . '.p5c');
	echo 'autoload(' . $class_name . ")\n";
});

var_dump(interface_exists('autoload_interface', false));
var_dump(class_exists('autoload_implements', false));

$o = new Autoload_Implements;
var_dump($o);
var_dump($o instanceof autoload_interface);
unset($o);

var_dump(interface_exists('autoload_interface', false));
var_dump(class_exists('autoload_implements', false));

?>
===DONE===
--EXPECTF--
bool(false)
bool(false)
autoload(autoload_interface)
autoload(autoload_implements)
object(autoload_implements)#%d (0) {
}
bool(true)
bool(true)
bool(true)
===DONE===
