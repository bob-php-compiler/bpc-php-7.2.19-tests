--TEST--
Streams Based Unix Domain Datagram Loopback test
--SKIPIF--
<?php # vim:ft=php:
	if (array_search("udg",stream_get_transports()) === false)
		die('SKIP No support for UNIX domain sockets.');
?>
--FILE--
<?php
    $svSock = 'udgloop-sv.sock';
    $clSock = 'udgloop-cl.sock';
	if (file_exists($svSock))
		die("Temporary socket $svSock already exists.");
	if (file_exists($clSock))
	    die("Temporary socket $clSock already exists.");

	/* Setup socket server */
	$server = stream_socket_server("udg://$svSock", $errno, $errstr, STREAM_SERVER_BIND);
	if (!$server) {
		die('Unable to create AF_UNIX socket [server]');
	}

	/* Setup client */
	$client = stream_socket_client("udg://$clSock");
	if (!$client) {
		die('Unable to create AF_UNIX socket [client]');
	}

	// client send data to server
	$data = 'ABCdef123';
	echo "client: send '$data' to $svSock\n";
	stream_socket_sendto($client, $data, 0, $svSock);

	// server recv data
	$data = stream_socket_recvfrom($server, 100, 0, $peer);
	echo "server: received '$data' from $peer\n";

	// server response
	$data = strtoupper($data);
	echo "server: response '$data' to $peer\n";
	stream_socket_sendto($server, $data, 0, $peer);
	$data = strtolower($data);
	echo "server: response '$data' to $peer\n";
	stream_socket_sendto($server, $data, 0, $peer);

	// client recv response
	$data = stream_socket_recvfrom($client, 9, 0, $peer);
	echo "client: received '$data' from $peer\n";
	// client read response
	$data = fread($client, 9);
	echo "client: got '$data'\n";

	fclose($client);
	fclose($server);
	unlink($clSock);
	unlink($svSock);
?>
--EXPECT--
client: send 'ABCdef123' to udgloop-sv.sock
server: received 'ABCdef123' from udgloop-cl.sock
server: response 'ABCDEF123' to udgloop-cl.sock
server: response 'abcdef123' to udgloop-cl.sock
client: received 'ABCDEF123' from udgloop-sv.sock
client: got 'abcdef123'
