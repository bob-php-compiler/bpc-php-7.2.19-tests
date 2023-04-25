--TEST--
Check for EventDnsBase::__construct() error behavior
--SKIPIF--
<?php
if (!class_exists(EVENT_NS . "\\EventDnsBase")) {
	die("skip Event extra functions are disabled");
}
if (version_compare(PHP_VERSION, '7.0.0') >= 0) {
	die('skip target is PHP version < 7');
}
?>
--FILE--
<?php
$eventDnsBaseClass = EVENT_NS . '\\EventDnsBase';
$eventBaseClass = EVENT_NS . '\\EventBase';
$e = new $eventDnsBaseClass(new $eventBaseClass(), TRUE);
?>
--EXPECTF--

Fatal error: %SEventDnsBase::__construct(): %SEventBase must be passed by reference in %s on line %d
