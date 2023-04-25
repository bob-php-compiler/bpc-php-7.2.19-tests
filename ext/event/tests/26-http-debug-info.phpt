--TEST--
Check for EventHttp* objects debug info
--SKIPIF--
<?php
if (!class_exists(EVENT_NS . '\\EventHttp')) {
	die("skip Event extra functions are disabled");
}
if (!class_exists(EVENT_NS . '\\EventBufferEvent')) {
    die('skip Event is built without EventBufferEvent support');
}
if (!class_exists(EVENT_NS . '\\EventSslContext')) {
    die('skip Event is built without SSL support');
}
?>
--FILE--
<?php
$eventBaseClass = EVENT_NS . '\\EventBase';
$eventSslContextClass = EVENT_NS . '\\EventSslContext';
$eventBufferEventClass = EVENT_NS . '\\EventBufferEvent';
$eventHttpRequestClass = EVENT_NS . '\\EventHttpRequest';
$eventHttpClass = EVENT_NS . '\\EventHttp';
$eventHttpConnectionClass = EVENT_NS . '\\EventHttpConnection';

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

var_dump(new $eventHttpRequestClass(function() {}, null));
var_dump(new $eventHttpClass($base));
var_dump(new $eventHttpConnectionClass($base, null, '127.0.0.1', 0));
?>
--EXPECTF--
object(%SEventHttpRequest)#%d (0) {
}
object(%SEventHttp)#%d (0) {
}
object(%SEventHttpConnection)#%d (0) {
}
