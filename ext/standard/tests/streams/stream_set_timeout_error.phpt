--TEST--
Test stream_set_timeout() function : error conditions
--FILE--
<?php
/* Prototype  : proto bool stream_set_timeout(resource stream, int seconds, int microseconds)
 * Description: Set timeout on stream read to seconds + microseonds
 * Source code: ext/standard/streamsfuncs.c
 * Alias to functions: socket_set_timeout
 */

echo "*** Testing stream_set_timeout() : error conditions ***\n";

for ($i=0; $i<100; $i++) {
  $port = rand(10000, 65000);
  /* Setup socket server */
  $server = @stream_socket_server("tcp://127.0.0.1:$port");
  if ($server) {
    break;
  }
}
/* Connect to it */
$client = fsockopen("tcp://127.0.0.1:$port");

$seconds = 10;

echo "\n-- Testing stream_set_timeout() function with a closed socket --\n";
fclose($client);
var_dump( stream_set_timeout($client, $seconds) );

echo "\n-- Testing stream_set_timeout() function with an invalid stream --\n";
var_dump( stream_set_timeout($seconds, $seconds) );

echo "\n-- Testing stream_set_timeout() function with a stream that does not support timeouts --\n";
$filestream = fopen('/proc/self/comm', "r");
var_dump( stream_set_timeout($filestream, $seconds) );

fclose($filestream);
fclose($server);

echo "Done";
?>
--EXPECTF--
*** Testing stream_set_timeout() : error conditions ***

-- Testing stream_set_timeout() function with a closed socket --

Warning: stream_set_timeout(): supplied resource is not a valid stream resource in %s on line %i
bool(false)

-- Testing stream_set_timeout() function with an invalid stream --

Warning: stream_set_timeout() expects parameter 1 to be resource, integer given in %s on line %i
NULL

-- Testing stream_set_timeout() function with a stream that does not support timeouts --
bool(false)
Done
