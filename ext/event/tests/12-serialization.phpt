--TEST--
Check for SEGFAULT with serialization functions
--SKIPIF--
<?php if (!class_exists(EVENT_NS . "\\EventListener")) print "skip Event extra functions are disabled"; ?>
--FILE--
<?php
$eventHttpClass = EVENT_NS . '\\EventHttp';
$eventListenerClass = EVENT_NS . '\\EventListener';
$eventConfigClass = EVENT_NS . '\\EventConfig';
$eventHttpConnectionClass = EVENT_NS . '\\EventHttpConnection';
$eventBaseClass = EVENT_NS . '\\EventBase';
$eventHttpRequestClass = EVENT_NS . '\\EventHttpRequest';
$eventSslContextClass = EVENT_NS . '\\EventSslContext';

$base = new $eventBaseClass();
$listener = new $eventListenerClass($base, function () { }, null, 0, -1, '0.0.0.0:12345');

$http = new $eventHttpClass($base);
$http_request = new $eventHttpRequestClass(function () {});
$http_connection = new $eventHttpConnectionClass($base, null, "0.0.0.0", 9099);
$config  = new $eventConfigClass;

if (class_exists($eventSslContextClass)) {
    $ssl_context = new $eventSslContextClass($eventSslContextClass::TLS_SERVER_METHOD, []);
    serialize($ssl_context);
}

/////////////////////////////////////////////

if (function_exists('json_encode')) {
	json_encode($listener);
}

function a($a) { debug_backtrace(0, 3); }
a($listener);
echo "1 - ok\n";

/////////////////////////////////////////////

function testSerializeEventObject($o) {
    $eventExceptionClass = EVENT_NS . '\\EventException';

    $object = &$o;

    try {
        serialize($object);
    } catch (\Exception $e) {
        echo get_class($object), ' - ',
            ($e instanceof $eventExceptionClass ? 'ok' : 'error - ' . get_class($e)),
            "\n";
    }
}

testSerializeEventObject($base);
testSerializeEventObject($http);
testSerializeEventObject($http_request);
testSerializeEventObject($http_connection);
testSerializeEventObject($config);
testSerializeEventObject($listener);


?>
--EXPECTF--
1 - ok
%SEventBase - ok
%SEventHttp - ok
%SEventHttpRequest - ok
%SEventHttpConnection - ok
%SEventConfig - ok
%SEventListener - ok
