--TEST--
Check for EventListener error behaviour in PHP5
--SKIPIF--
<?php
if (version_compare(PHP_VERSION, '7.0.0') >= 0) {
	die('skip target is PHP version < 7');
}
if (!class_exists(EVENT_NS . "\\EventListener")) die("skip Event extra functions are disabled");
if (substr(PHP_OS, 0, 3) == "WIN") die('skip Not for Windows');
?>
--FILE--
<?php
$eventBaseClass = EVENT_NS . '\\EventBase';
$eventListenerClass = EVENT_NS . '\\EventListener';
$eventUtilClass = EVENT_NS . '\\EventUtil';
$l = new $eventListenerClass(new $eventBaseClass(), function() {}, NULL, $eventUtilClass::AF_UNIX, 0, 'unix:/tmp/1.sock');
?>
--EXPECTF--
Fatal error: %SEventListener::__construct(): %SEventBase must be passed by reference in %s on line %d
