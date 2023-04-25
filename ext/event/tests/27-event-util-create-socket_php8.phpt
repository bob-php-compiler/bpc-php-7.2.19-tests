--TEST--
Check for EventUtil::createSocket
--SKIPIF--
<?php
if (PHP_VERSION_ID < 80000) {
	die("skip only for PHP > 8");
}
if (!extension_loaded('sockets')) {
	die("skip sockets extension is not available");
}
if (!method_exists(EVENT_NS . '\\EventUtil', 'createSocket')) {
	die('skip Event is built without sockets support');
}
?>
--FILE--
<?php
$eventUtilClass = EVENT_NS . '\\EventUtil';

if (!$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)) {
	exit('socket_create failed');
}

$ip = '127.0.0.1';
if (!socket_bind($sock, $ip)) {
	exit('socket_bind failed');
}

if (($fd = $eventUtilClass::getSocketFD($sock)) <= 0) {
	exit('EventUtil::getSocketFD failed');
}

$sock2 = $eventUtilClass::createSocket($fd);

var_dump($sock2);
var_dump($fd);
var_dump($eventUtilClass::getSocketFD($sock2) === $fd);
?>
--EXPECTF--
object(Socket)#%d (0) {
}
int(%d)
bool(true)
