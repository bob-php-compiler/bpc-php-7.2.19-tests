--TEST--
Streams Based IPv4 UDP Loopback test
--FILE--
<?php
	/* Setup socket server */
	for ($port = 31338; $port < 31500; ++$port) {
	  $uri = "udp://127.0.0.1:$port";
	  $server = @stream_socket_server($uri, $errno, $errstr, STREAM_SERVER_BIND);
	  if ($server) break;
	}
	if (!$server) {
		die('Unable to create AF_INET socket [server]: ' . $errstr);
	}

	/* Connect to it */
	$client = stream_socket_client($uri);
	if (!$client) {
		die('Unable to create AF_INET socket [client]');
	}

    // client send data to server
	$data = 'ABCdef123';
	echo "client: send '$data'\n";
	fwrite($client, $data);

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
?>
--EXPECTF--
client: send 'ABCdef123'
server: received 'ABCdef123' from 127.0.0.1:%d
server: response 'ABCDEF123' to 127.0.0.1:%d
server: response 'abcdef123' to 127.0.0.1:%d
client: received 'ABCDEF123' from 127.0.0.1:%d
client: got 'abcdef123'
