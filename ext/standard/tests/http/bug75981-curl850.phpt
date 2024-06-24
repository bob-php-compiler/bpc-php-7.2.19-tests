--TEST--
Bug #75981 (stack-buffer-overflow while parsing HTTP response)
--ARGS--
--bpc-include-file ext/standard/tests/http/server.inc \
--SKIPIF--
<?php
    if (LIBCURL_VERSION_NUM != 0x080500) echo 'skip for libcurl 8.5.0';
    require 'server.inc'; http_server_skipif('tcp://127.0.0.1:12342'); 
?>
--FILE--
<?php
require 'server.inc';

$options = array(
  'http' => array(
    'protocol_version' => '1.1',
    'header' => 'Connection: Close'
  ),
);

$ctx = stream_context_create($options);

$responses = array(
	"data://text/plain,000000000100\xA\xA"
);
$pid = http_server('tcp://127.0.0.1:12342', $responses);

echo file_get_contents('http://127.0.0.1:12342/', false, $ctx);

http_server_kill($pid);

?>
DONE
--EXPECTF--
Warning: file_get_contents(http://127.0.0.1:12342/): Received HTTP/0.9 when not allowed in %s on line %d
DONE
