--TEST--
Check for EventBufferEvent SSL features, OpenSSL version 1.1.0 and above
--SKIPIF--
<?php
if (!class_exists('EventBufferEvent')) {
	die('skip Event is built without EventBufferEvent support');
}
if (!class_exists(EVENT_NS . '\\EventSslContext')) {
    die('skip Event is built without SSL support');
}
$class = 'EventBufferEvent';
$prop = 'allow_ssl_dirty_shutdown';

if (!property_exists($class, $prop)) {
	die('skip Event SSL allow_ssl_dirty_shutdown property is not supported');
}
if (version_compare(PHP_VERSION, '7.0.0') < 0) {
	die('skip target is PHP version >= 7');
}
if (defined('EventSslContext::OPENSSL_VERSION_NUMBER') &&
	EventSslContext::OPENSSL_VERSION_NUMBER < 0x10100000)
{
	die('skip the test is for OpenSSL version >= 1.1.0');
}
if (defined('EventSslContext::LIBRESSL_VERSION_NUMBER')) {
	die('skip LibreSSL does not support this function');
}
?>
--FILE--
<?php
$base = new EventBase();

foreach ([
	'TLS' => 'EventSslContext::TLS_SERVER_METHOD',
] as $k => $method)
{
	if (!defined($method)) {
		var_dump($k);
		exit;
	}
    $method = constant($method);

	@$ctx = new EventSslContext($method, []);
	$bev = EventBufferEvent::sslSocket($base, null, $ctx, EventBufferEvent::SSL_ACCEPTING);
	var_dump($bev->sslGetProtocol());

    var_dump($ctx->setMinProtoVersion(EventSslContext::TLS1_VERSION));

	var_dump($bev->allow_ssl_dirty_shutdown);

	$bev->allow_ssl_dirty_shutdown = false;
	var_dump($bev->allow_ssl_dirty_shutdown);

	$bev->allow_ssl_dirty_shutdown = true;
	var_dump($bev->allow_ssl_dirty_shutdown);
}
?>
--EXPECTF--
string(%d) "TLS%s"
bool(true)
bool(false)
bool(false)
bool(true)
