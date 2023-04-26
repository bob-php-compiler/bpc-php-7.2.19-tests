--TEST--
Check for event_add and event_del
--FILE--
<?php
$eventClass = EVENT_NS . '\\Event';
$eventBaseClass = EVENT_NS . '\\EventBase';

$base = new $eventBaseClass();

$e1 = $eventClass::timer($base, function ($arg) { echo "not ok 3\n"; });
$e1->add(0.1);

$e2 = $eventClass::timer($base, function ($arg) { echo "ok 3\n"; });
$e2->add(0.2);

$e1->pending and print("ok 1\n");
$e2->pending and print("ok 2\n");

$e1->del();
$e1->pending and print("not ok 4\n");

$base->loop($eventBaseClass::LOOP_ONCE);

$e1->setTimer($base, function($arg) { echo "ok 4\n"; });
$e1->add(0.3);
$base->loop($eventBaseClass::LOOP_ONCE);

$e1->del();
$e2->del();
$base->loop();
?>
--EXPECT--
ok 1
ok 2
ok 3
ok 4
