--TEST--
Check for EventBufferEvent SSL features
--SKIPIF--
<?php
if (!class_exists(EVENT_NS . '\\EventBufferEvent')) {
    die('skip Event is built without EventBufferEvent support');
}
$eventSslContextClass = EVENT_NS . '\\EventSslContext';
if (!class_exists($eventSslContextClass)) {
    die('skip Event is built without SSL support');
}
$class = EVENT_NS . '\\EventBufferEvent';
$prop = 'allow_ssl_dirty_shutdown';

if (!property_exists($class, $prop)) {
    die('skip Event SSL allow_ssl_dirty_shutdown property is not supported');
}
if (version_compare(PHP_VERSION, '7.0.0') < 0) {
    die('skip target is PHP version >= 7');
}
if (defined('EventSslContext::OPENSSL_VERSION_NUMBER') &&
    $eventSslContextClass::OPENSSL_VERSION_NUMBER >= 0x10100000)
    die('skip the test is for OpenSSL version < 1.1.0')
?>
--FILE--
<?php
    $eventBaseClass = EVENT_NS . '\\EventBase';
$eventSslContextClass = EVENT_NS . '\\EventSslContext';
$eventBufferEventClass = EVENT_NS . '\\EventBufferEvent';

$base = new $eventBaseClass();

foreach ([
    "SSLv3"   => "$eventSslContextClass::SSLv3_SERVER_METHOD",
    "SSLv2"   => "$eventSslContextClass::SSLv2_SERVER_METHOD",
    "TLS"     => "$eventSslContextClass::TLS_SERVER_METHOD",
] as $k => $method)
{
    if (!defined($method)) {
        var_dump($k);
        var_dump(false);
        var_dump(false);
        var_dump(true);
        continue;
    }
    $method = constant($method);

    @$ctx = new $eventSslContextClass($method, []);
    $bev = $eventBufferEventClass::sslSocket($base, null, $ctx, $eventBufferEventClass::SSL_ACCEPTING);
    var_dump($bev->sslGetProtocol());

    var_dump($bev->allow_ssl_dirty_shutdown);

    $bev->allow_ssl_dirty_shutdown = false;
    var_dump($bev->allow_ssl_dirty_shutdown);

    $bev->allow_ssl_dirty_shutdown = true;
    var_dump($bev->allow_ssl_dirty_shutdown);
}
?>
--EXPECTF--
string(5) "SSLv3"
bool(false)
bool(false)
bool(true)
string(5) "SSLv2"
bool(false)
bool(false)
bool(true)
string(%d) "TLSv%s"
bool(false)
bool(false)
bool(true)
