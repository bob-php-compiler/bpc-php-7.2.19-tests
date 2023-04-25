--TEST--
Check for gc_collect_cycles appled after event free
--SKIPIF--
<?php if (!function_exists("gc_collect_cycles")) print "skip"; ?>
--FILE--
<?php
$eventBaseClass = EVENT_NS . '\\EventBase';
$eventClass = EVENT_NS . '\\Event';

$stdin = fopen("php://stdin", 'r');

stream_set_blocking($stdin, false);

register_shutdown_function(function () use (&$stdin) {
	fclose($stdin);
});

$base = new $eventBaseClass();
$e = new $eventClass($base, $stdin, $eventClass::READ, function(){});
$e->free();
gc_collect_cycles(); // segfaults if something goes wrong
echo "ok";
?>
--EXPECT--
ok
