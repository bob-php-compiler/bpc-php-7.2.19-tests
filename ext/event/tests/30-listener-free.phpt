--TEST--
Check for EventListener::free behavior
--SKIPIF--
<?php
if (!class_exists("EventListener")) die("skip Event extra functions are disabled");
//if (substr(PHP_OS, 0, 3) == "WIN") die('skip Not for Windows');
?>
--FILE--
<?php
$base = new EventBase();
$listener = new EventListener($base, function() {}, null, 0, -1, '0.0.0.0:9898');
var_dump($listener->fd);
// Multiple calls to free() shouldn't break things.
$listener->free();
$listener->free();
$listener->free();
var_dump($listener->fd);
?>
--EXPECTF--
int(%d)
NULL
