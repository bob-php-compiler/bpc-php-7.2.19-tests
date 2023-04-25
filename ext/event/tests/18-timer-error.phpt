--TEST--
Check for Event::timer() error behavior in PHP5
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

$e = $eventClass::timer(new $eventBaseClass(), function() {});
?>
--EXPECTF--

Fatal error: %SEvent::timer(): %SEventBase must be passed by reference in %s on line %d
