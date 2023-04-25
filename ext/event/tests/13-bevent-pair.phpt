--TEST--
Check for EventBufferEvent::createPair()
--FILE--
<?php
$eventBaseClass = EVENT_NS . '\\EventBase';
$eventClass = EVENT_NS . '\\Event';
$eventBufferEventClass = EVENT_NS . '\\EventBufferEvent';

$base = new $eventBaseClass();

$pair = $eventBufferEventClass::createPair($base);

$pair[0]->enable($eventClass::WRITE);
$pair[1]->enable($eventClass::READ);
$pair[0]->write("xyz");
echo $pair[1]->read(10) == "xyz" ? "ok" : 'failed', PHP_EOL;
$base->loop();

$pair[0]->disable($eventClass::WRITE);
$pair[0]->write("xyz");
echo $pair[1]->read(10) == "" ? "ok" : 'failed', PHP_EOL;
$base->loop();
?>
--EXPECTF--
ok
ok
