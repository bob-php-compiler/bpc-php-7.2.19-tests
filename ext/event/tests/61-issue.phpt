--TEST--
Check for issue #61 - segfault after throwing exception from an event handler
--FILE--
<?php
$eventBaseClass = EVENT_NS . '\\EventBase';
$eventConfigClass = EVENT_NS . '\\EventConfig';
$eventClass = EVENT_NS . '\\Event';

$base = new $eventBaseClass();
$e = new $eventClass($base, -1, $eventClass::TIMEOUT, function ($fd, $what, $arg) {
    throw new Exception('issue61');
});
$e->addTimer(0);
$base->loop();
?>
--EXPECTF--
Warning: Failed to invoke event callback, breaking the loop. in %s on line 11

Fatal error: Uncaught Exception: issue61 in %s/61-issue.php:%d
Stack trace:
#0 [internal function]: {closure}(-1, 1, NULL)
#1 %s/61-issue.php(%d): %SEventBase->loop()
#2 {main}
  thrown in %s/61-issue.php on line %d
