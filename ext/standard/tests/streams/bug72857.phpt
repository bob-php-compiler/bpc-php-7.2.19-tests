--TEST--
Bug #72857 stream_socket_recvfrom read access violation
--FILE--
<?php
	$fname = "stream_socket_recvfrom.tmp";
	$fp0 = fopen($fname, 'w');
	$v2=10;
	$v3=0;//STREAM_PEEK;
	$v4="A";

	var_dump(stream_socket_recvfrom($fp0,$v2,$v3,$v4), $v4);

	fclose($fp0);
	unlink($fname);
?>
==DONE==
--EXPECT--
bool(false)
string(1) "A"
==DONE==
