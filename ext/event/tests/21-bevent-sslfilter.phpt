--TEST--
Check for EventBufferEvent::createSslFilter() behavior
--SKIPIF--
<?php
if (!class_exists(EVENT_NS . "\\EventSslContext")) die("skip Event extra functions are disabled");
?>
--FILE--
<?php
$eventBaseClass = EVENT_NS . '\\EventBase';
$eventBufferEventClass = EVENT_NS . '\\EventBufferEvent';
$eventSslContextClass = EVENT_NS . '\\EventSslContext';

$methods = [
	"$eventSslContextClass::TLS_SERVER_METHOD",
	"$eventSslContextClass::SSLv3_SERVER_METHOD",
	"$eventSslContextClass::SSLv2_SERVER_METHOD",
	"$eventSslContextClass::SSLv23_SERVER_METHOD",
];

foreach ($methods as $method) {
	if (defined($method)) {
		$method = constant($method);
		break;
	}
}

$base = new $eventBaseClass();
$b = new $eventBufferEventClass($base);
$ctx = new $eventSslContextClass($method, []);
$eventBufferEventClass::createSslFilter($b, $ctx, (int)$eventBufferEventClass::SSL_ACCEPTING, 0);
echo 'ok';
?>
--EXPECT--
ok
