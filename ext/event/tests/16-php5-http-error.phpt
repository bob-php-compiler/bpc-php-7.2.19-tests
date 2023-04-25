--TEST--
Check for EventHttp::__construct() error behavior
--SKIPIF--
<?php
if (!class_exists(EVENT_NS . "\\EventHttp")) {
	die("skip Event extra functions are disabled");
}
if (version_compare(PHP_VERSION, '7.0.0') >= 0) {
	die('skip target is PHP version < 7');
}
?>
--FILE--
<?php
$eventBaseClass = EVENT_NS . '\\EventBase';
$eventHttpClass = EVENT_NS . '\\EventHttp';
$e = new $eventHttpClass(new $eventBaseClass());
?>
--EXPECTF--

Fatal error: %SEventHttp::__construct(): %SEventBase must be passed by reference in %s on line %d
