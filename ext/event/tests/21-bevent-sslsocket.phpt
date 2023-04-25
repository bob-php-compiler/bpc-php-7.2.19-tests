--TEST--
Check for EventBufferEvent::sslSocket() error behavior
--SKIPIF--
<?php
if (!class_exists(EVENT_NS . "\\EventSslContext")) die("skip Event extra functions are disabled");
if (version_compare(PHP_VERSION, '7.0.0') < 0) {
	die('skip target is PHP version >= 7');
}
?>
--FILE--
<?php
$eventBaseClass = EVENT_NS . '\\EventBase';
$eventSslContextClass = EVENT_NS . '\\EventSslContext';
$eventBufferEventClass = EVENT_NS . '\\EventBufferEvent';

foreach ([
	"$eventSslContextClass::TLS_SERVER_METHOD",
	"$eventSslContextClass::SSLv3_SERVER_METHOD",
	"$eventSslContextClass::SSLv2_SERVER_METHOD",
	"$eventSslContextClass::SSLv23_SERVER_METHOD"] as $method)
{
	if (defined($method)) {
		$method = constant($method);
		break;
	}
}

$base = new $eventBaseClass();
$ctx = new $eventSslContextClass($method, []);
$eventBufferEventClass::sslSocket(new $eventBaseClass(), null, $ctx, $eventBufferEventClass::SSL_ACCEPTING);
echo 'ok';
?>
--EXPECT--
ok
