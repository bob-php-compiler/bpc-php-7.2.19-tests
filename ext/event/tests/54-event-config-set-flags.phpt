--TEST--
Check for EventConfig::setFlags basic behavior
--FILE--
<?php
$eventBaseClass = EVENT_NS . '\\EventBase';
$eventConfigClass = EVENT_NS . '\\EventConfig';
$eventClass = EVENT_NS . '\\Event';

$config = new $eventConfigClass;
$flags = $eventBaseClass::NOLOCK;
if (substr(PHP_OS, 0, 3) == "WIN") {
    $flags |= $eventBaseClass::STARTUP_IOCP;
}
var_dump($config->setFlags($flags));

$base = new $eventBaseClass($config);
$stream = STDOUT;
$event = new $eventClass($base, -1, $eventClass::TIMEOUT, function () {
    echo "ok\n";
});
$event->add(.1);
$base->loop($eventBaseClass::LOOP_ONCE);
?>
--EXPECT--
bool(true)
ok
