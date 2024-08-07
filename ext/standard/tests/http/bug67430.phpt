--TEST--
Bug #67430 (http:// wrapper doesn't follow 308 redirects)
--ARGS--
--bpc-include-file ext/standard/tests/http/server.inc \
--SKIPIF--
<?php require 'server.inc'; http_server_skipif('tcp://127.0.0.1:12342'); ?>
--FILE--
<?php
require 'server.inc';

function do_test($follow) {
  $options = [
    'http' => [
      'method' => 'POST',
      'follow_location' => $follow,
    ],
  ];

  $ctx = stream_context_create($options);

  $responses = [
    "data://text/plain,HTTP/1.1 308\r\nLocation: /foo\r\n\r\n",
    "data://text/plain,HTTP/1.1 200\r\nConnection: close\r\n\r\n",
  ];
  $pid = http_server('tcp://127.0.0.1:12342', $responses, $output);

  file_get_contents('http://127.0.0.1:12342/', false, $ctx);
  fseek($output, 0, SEEK_SET);
  echo stream_get_contents($output);

  http_server_kill($pid);
}

do_test(true);
do_test(false);

?>
Done
--EXPECT--
POST / HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*

POST /foo HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*

POST / HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*

Done
