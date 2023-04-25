--TEST--
Check for event_buffer sockets
--SKIPIF--
<?php
    if (!extension_loaded('event')) {
        die('skip - event extension not available.');
    }
    if (getenv("SKIP_ONLINE_TESTS")) {
        die("skip test requiring internet connection");
    }
?>
--FILE--
<?php
$eventBaseClass = EVENT_NS . '\\EventBase';
$eventBufferEventClass = EVENT_NS . '\\EventBufferEvent';
$eventUtilClass = EVENT_NS . '\\EventUtil';

$base = new $eventBaseClass();
$bev = new $eventBufferEventClass($base, NULL, $eventBufferEventClass::OPT_CLOSE_ON_FREE);

if (!$bev->connectHost(NULL, "www.php.net", 80, $eventUtilClass::AF_INET)) {
	exit("Connection failed\n");
}

$bev->setCallbacks(NULL, NULL, function ($bev, $events, $data) use ($eventBufferEventClass) {
	if ($events & $eventBufferEventClass::CONNECTED) {
		/* We're connected to 127.0.0.1:8080.   Ordinarily we'd do
		something here, like start reading or writing. */
		echo "Connected\n";
	} elseif ($events & $eventBufferEventClass::ERROR) {
		exit("EVENT_BEV_EVENT_ERROR error occured\n");
 	}
}, "data");

$base->dispatch();

$bev->free();
?>
--EXPECT--
Connected

