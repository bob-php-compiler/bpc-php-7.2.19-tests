--TEST--
Check for Event::set() error behavior in PHP 5
--SKIPIF--
<?php
if (version_compare(PHP_VERSION, '7.0.0') >= 0) {
	die('skip target is PHP version < 7');
}
?>
--FILE--
<?php
$eventBaseClass = EVENT_NS . '\\EventBase';
$eventClass = EVENT_NS . '\\Event';

$b = new $eventBaseClass();
$e = new $eventClass($b, 0, $eventClass::READ, function() {});
$e->set(new $eventBaseClass(), 1);
?>
--EXPECTF--

Fatal error: %SEvent::set(): %SEventBase must be passed by reference in %s on line %d
