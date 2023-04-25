--TEST--
Check for EventHttpConnection::__construct() error behavior
--SKIPIF--
<?php
if (!class_exists(EVENT_NS . "\\EventHttpConnection")) {
	die('skip Event extra functions are disabled');
}
if (version_compare(PHP_VERSION, '7.0.0') >= 0) {
	die('skip target is PHP version < 7');
}
?>
--FILE--
<?php
$eventBaseClass = EVENT_NS . '\\EventBase';
$eventHttpConnectionClass = EVENT_NS . '\\EventHttpConnection';

$e = new $eventHttpConnectionClass(new $eventBaseClass(), NULL, '10.10.0.1', 9899);
?>
--EXPECTF--

Fatal error: %SEventHttpConnection::__construct(): %SEventBase must be passed by reference in %s on line %d
