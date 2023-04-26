--TEST--
Check for issue #49
--FILE--
<?php
$eventBaseClass = EVENT_NS . '\\EventBase';
$eventClass = EVENT_NS . '\\Event';

$base = new $eventBaseClass;

$stream = fopen("php://stdout", 'w');
stream_set_blocking($stream, false);
register_shutdown_function(function () use (&$stream) {
	fclose($stream);
});

$event = new $eventClass($base, $stream, $eventClass::READ | $eventClass::PERSIST, function ($fd, $what, $arg) {
    echo "ok\n";
});
$event->add(.1);
$base->loop($eventBaseClass::LOOP_ONCE);

?>
--EXPECT--
ok
