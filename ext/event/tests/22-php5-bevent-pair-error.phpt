--TEST--
Check for EventBufferEvent::createPair() error behavior in PHP5
--SKIPIF--
<?php
if (version_compare(PHP_VERSION, '7.0.0') >= 0) {
	die('skip target is PHP version < 7');
}
?>
--FILE--
<?php
$eventBaseClass = EVENT_NS . '\\EventBase';
$eventBufferEventClass = EVENT_NS . '\\EventBufferEvent';
$eventBufferEventClass::createPair(new $eventBaseClass());
?>
--EXPECTF--
Fatal error: %SEventBufferEvent::createPair(): %SEventBase must be passed by reference in %s on line %d
