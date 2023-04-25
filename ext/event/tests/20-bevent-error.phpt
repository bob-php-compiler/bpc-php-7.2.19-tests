--TEST--
Check for EventBufferEvent::__construct() error behavior in PHP5
--SKIPIF--
<?php
if (version_compare(PHP_VERSION, '7.0.0') >= 0) {
	die('skip PHP version < 7');
}
?>
--FILE--
<?php
$eventBaseClass = EVENT_NS . '\\EventBase';
$eventBufferEventClass = EVENT_NS . '\\EventBufferEvent';
$b = new $eventBufferEventClass(new $eventBaseClass());
?>
--EXPECTF--

Fatal error: %SEventBufferEvent::__construct(): %SEventBase must be passed by reference in %s on line %d
